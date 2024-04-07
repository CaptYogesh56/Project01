<?php

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('register');
});

Route::get('/register',[RegisterController::class, 'index']);
Route::post('/register',[RegisterController::class, 'register'])->name('register');

Route::get('/login',[RegisterController::class, 'loginindex']);
Route::post('/login',[RegisterController::class, 'login'])->name('login');

Route::get('/forget-password',[ForgotPasswordController::class, 'index']);
Route::post('/forget-password',[ForgotPasswordController::class, 'forgotpass'])->name('forget-password');


Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'resetpasslink'])->name('reset-password');

Route::post('/reset-password', [ForgotPasswordController::class, 'resetpass'])->name('resetpassword');