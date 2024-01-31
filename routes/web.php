<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\SocialiteLoginController;
use App\Http\Controllers\page\StartController;
use App\Http\Controllers\page\SmallAdsController;
use App\Http\Controllers\page\EstatesController;
use App\Http\Controllers\page\DashboardController;
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
Route::get('/regulamin', [StartController::class, 'index'])->name('page.regulamin');
Route::get('/polityka_prywatnosci', [StartController::class, 'index'])->name('page.polityka_prywatnosci');

Route::get('/drobne', [SmallAdsController::class, 'lists'])->name('page.small_ads.lists');
//Route::get('/drobne/modyfikuj', [SmallAdsController::class, 'modyfikuj'])->name('page.small_ads.modyfikuj');
Route::get('/drobne/all', [SmallAdsController::class, 'lists'])->name('page.small_ads.lists');
Route::get('/drobne/oferta/{SmallAdsContent}', [SmallAdsController::class, 'show'])->name('page.small_ads.show');
Route::get('/drobne/{SmallAdsCategorie}', [SmallAdsController::class, 'category'])->name('page.small_ads.category');
Route::get('/drobne/{SmallAdsCategorie}/{SmallAdsSubCategorie}', [SmallAdsController::class, 'subCategory'])->name('page.small_ads.subCategory');

Route::get('/nieruchomosci', [EstatesController::class, 'all'])->name('page.estates.all');

Route::get('/uzytkownicy/tablica/{UserID}', [DashboardController::class, 'userDashboard'])->name('page.dashboard.user');

Route::get('login/google', [SocialiteLoginController::class, 'redirectToGoogle'])->name('redirectToGoogle');
Route::get('login/google/callback', [SocialiteLoginController::class, 'handleGoogleCallback']);

Route::get('login/facebook', [SocialiteLoginController::class, 'redirectToFacebook'])->name('redirectToFacebook');
Route::get('login/facebook/callback', [SocialiteLoginController::class, 'handleFacebookCallback']);

Auth::routes();

Route::get('/home', [StartController::class, 'index'])->name('home');
