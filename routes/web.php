<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

use App\Http\Controllers\Auth\SocialiteLoginController;
use App\Http\Controllers\page\StartController;
use App\Http\Controllers\page\PageController;
use App\Http\Controllers\page\SmallAdsController;
use App\Http\Controllers\page\EstatesController;
use App\Http\Controllers\page\DashboardController;
use App\Http\Controllers\page\UserDashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [StartController::class, 'index'])->name('page.start');
Route::get('/start', [StartController::class, 'index'])->name('page.start2');

Route::get('/drobne', [SmallAdsController::class, 'lists'])->name('page.small_ads.lists');
//Route::get('/drobne/modyfikuj', [SmallAdsController::class, 'modyfikuj'])->name('page.small_ads.modyfikuj');
Route::get('/drobne/all', [SmallAdsController::class, 'lists'])->name('page.small_ads.lists');
Route::get('/drobne/oferta/{SmallAdsContent}', [SmallAdsController::class, 'show'])->name('page.small_ads.show');
Route::get('/drobne/getSubcategory/{categoryID}', [SmallAdsController::class, 'getSubcategory'])->name('page.small_ads.getSubcategory');
Route::get('/drobne/{SmallAdsCategorie}', [SmallAdsController::class, 'category'])->name('page.small_ads.category');
Route::get('/drobne/{SmallAdsCategorie}/{SmallAdsSubCategorie}', [SmallAdsController::class, 'subCategory'])->name('page.small_ads.subCategory');

Route::get('/nieruchomosci', [EstatesController::class, 'all'])->name('page.estates.all');

Route::get('/uzytkownicy/tablica/{UserID}', [UserDashboardController::class, 'userDashboard'])->name('page.dashboard.user');

Route::get('login/{provider}', [SocialiteLoginController::class, 'redirectToProvider'])->name('redirectToProvider');
Route::get('login/{provider}/callback', [SocialiteLoginController::class, 'handleProviderCallback']);
Route::get('login/facebook/callback', [SocialiteLoginController::class, 'handleFacebookCallback']);
Route::get('login/google/callback', [SocialiteLoginController::class, 'handleGoogleCallback']);

Route::get('user/twoje_ogloszenia', [UserDashboardController::class, 'your_ads'])->name('page.user.your_ads');
Route::get('user/ogloszenie_drobne/content_form', [SmallAdsController::class, 'content_form'])->name('page.user.small_ads.content_form');
Route::post('user/ogloszenie_drobne/content_post', [SmallAdsController::class, 'content_post'])->name('page.user.small_ads.content_post');
Route::get('user/ogloszenie_drobne/photo_form', [SmallAdsController::class, 'photo_form'])->name('page.user.small_ads.photo_form');
Route::post('user/ogloszenie_drobne/photo_send', [SmallAdsController::class, 'photo_send'])->name('page.user.small_ads.photo_send');
Route::get('user/ogloszenie_drobne/photo_send',[SmallAdsController::class, 'photo_sendGet'])->name('page.user.small_ads.photo_sendGet');
Route::post('user/ogloszenie_drobne/photo_delete', [SmallAdsController::class, 'photo_send'])->name('page.user.small_ads.photo_delete');
Route::get('user/ogloszenie_drobne/promotion_form', [SmallAdsController::class, 'promotion_form'])->name('page.user.small_ads.promotion_form');
Route::post('user/ogloszenie_drobne/promotion_send', [SmallAdsController::class, 'promotion_send'])->name('page.user.small_ads.promotion_send');
Route::post('user/ogloszenie_drobne/payment_form', [SmallAdsController::class, 'payment_form'])->name('page.user.small_ads.payment_form');

//przyklad trasy sprwdzajacej uprawnienia uzytkownika
Route::get('/admin', 'AdminController@index')->middleware('auth', 'checkPermission:admin');


$regulamin =  ['page'=>'page','param'=>'regulamin'];


Route::get('/regulamin', [PageController::class, 'regulamin'])->name('page.regulamin');
Route::get('/polityka_prywatnosci', [PageController::class, 'polityka_poprawnosci'])->name('page.polityka_prywatnosci');
Route::get('/instrukcja_usuniecia_konta', [PageController::class, 'instrukcja_usuniecia_konta'])->name('page.instrukcja_usuniecia_konta');


Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});


Route::get('/auth/callback', function () {
    $user = Socialite::driver('google')->user();

    // OAuth 2.0 providers...
    $token = $user->token;
    $refreshToken = $user->refreshToken;
    $expiresIn = $user->expiresIn;

    // All providers...
    $user->getId();
    $user->getNickname();
    $user->getName();
    $user->getEmail();
    $user->getAvatar();
});


Auth::routes();

Route::get('/home', [StartController::class, 'index'])->name('home');
