<?php

use App\Http\Controllers\auth\EmailVerification;
use App\Http\Controllers\auth\PasswordResetController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

//Route for testing FE


//Route logout
Route::get('/logout', [ LoginController::class, 'logout' ])->name('logout');

//Route forgot password
Route::get('/forgot-password', [ PasswordResetController::class, 'index' ])->name('password.index');
Route::post('/forgot-password', [ PasswordResetController::class, 'store' ])->name('password.store');
Route::get('/forgot-password/preview', [ PasswordResetController::class, 'forgotpasswordpreview' ])->name('password.reset.preview');
Route::get('/reset-password/{token}', [ PasswordResetController::class, 'risettingpassword' ])->name('password.reset');
Route::post('/reset-password', [ PasswordResetController::class, 'submitnewpassword' ])->name('password.update');

Route::middleware([ 'guest' ])->group(function () {
    //Route login
    Route::get('/', [ LoginController::class, 'index' ])->name('login');
    Route::post('/login', [ LoginController::class, 'login' ])->name('login.store');
});

Route::middleware([ 'auth' ])->group(function () {
    //Route home
    Route::get('/home', [ HomeController::class, 'home' ])->name('home');
    Route::get('/guru', [ HomeController::class, 'guru' ])->name('guru');
    //Route email verification
    Route::get('/email/verify', [ EmailVerification::class, 'index' ])->middleware('emailVerifyAccess')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [ EmailVerification::class, 'verifemail' ])->middleware('signed')->name('verification.verify');
    Route::post('/email/verification-notification', [ EmailVerification::class, 'resendemail' ])->middleware('throttle:6,1')->name('verification.resend');
});