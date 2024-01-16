<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\SocialiteLoginController;
use App\Http\Controllers\page\StartController;
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

Route::get('login/google', [SocialiteLoginController::class, 'redirectToGoogle']);
Route::get('login/google/callback', [SocialiteLoginController::class, 'handleGoogleCallback']);

Route::get('login/facebook', [SocialiteLoginController::class, 'redirectToFacebook']);
Route::get('login/facebook/callback', [SocialiteLoginController::class, 'handleFacebookCallback']);

Auth::routes();

Route::get('/home', [StartController::class, 'index'])->name('home');
