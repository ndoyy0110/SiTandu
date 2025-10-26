<?php

use App\Http\Controllers;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::get('/ForgetPassword', [AuthController::class, 'showForgetPasswordForm'])->name('ForgetPassword');
Route::get('/ResetPassword', [AuthController::class, 'showResetPassword'])->name('ResetPassword');

Route::get('/dosen/home', [DosenController::class, 'home'])->name('dosen.home');
Route::get('/dosen/janjiTemu', [DosenController::class, 'janjiTemu'])->name('dosen.janjiTemu');
Route::get('/dosen/tandaTangan', [DosenController::class, 'tandaTangan'])->name('dosen.tandaTangan');
Route::get('/dosen/jadwalMendatang', [DosenController::class, 'jadwalMendatang'])->name('dosen.jadwalMendatang');
