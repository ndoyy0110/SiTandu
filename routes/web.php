<?php

use App\Http\Controllers;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::get('/ForgetPassword', [AuthController::class, 'showForgetPasswordForm'])->name('ForgetPassword');
Route::get('/ResetPassword', [AuthController::class, 'showResetPassword'])->name('ResetPassword');
