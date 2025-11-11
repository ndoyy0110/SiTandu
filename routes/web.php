<?php

use App\Http\Controllers;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\Mahasiswa;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::get('/registerMahasiswa', [AuthController::class, 'showRegisterMahasiswa'])->name('RegisterMahasiswa');
Route::get('/ForgetPassword', [AuthController::class, 'showForgetPasswordForm'])->name('ForgetPassword');
Route::get('/ResetPassword', [AuthController::class, 'showResetPassword'])->name('ResetPassword');

Route::get('/dosen/home', [DosenController::class, 'home'])->name('dosen.home');
Route::get('/dosen/janjiTemu', [DosenController::class, 'janjiTemu'])->name('dosen.janjiTemu');
Route::get('/dosen/tandaTangan', [DosenController::class, 'tandaTangan'])->name('dosen.tandaTangan');
Route::get('/dosen/jadwalMendatang', [DosenController::class, 'jadwalMendatang'])->name('dosen.jadwalMendatang');
Route::get('/dosen/history', [DosenController::class, 'history'])->name('dosen.history');
Route::get('/dosen/progres', [DosenController::class, 'progres'])->name('dosen.progres');
Route::get('/dosen/jadwalUlang', [DosenController::class, 'jadwalUlang'])->name('dosen.jadwalUlang');
Route::get('/dosen/revisi', [DosenController::class, 'revisi'])->name('dosen.revisi');
Route::get('/dosen/ditolak', [DosenController::class, 'ditolak'])->name('dosen.ditolak');

Route::get('/mahasiswa/home', [MahasiswaController::class, 'home'])->name('mahasiswa.home');
Route::get('/mahasiswa/janjiTemu', [MahasiswaController::class, 'janjiTemu'])->name('mahasiswa.janjiTemu');
Route::get('/mahasiswa/tandaTangan', [MahasiswaController::class, 'tandaTangan'])->name('mahasiswa.tandaTangan');
Route::get('/mahasiswa/tracking', [MahasiswaController::class, 'tracking'])->name('mahasiswa.tracking');
Route::get('/mahasiswa/permintaanTTD', [MahasiswaController::class, 'permintaanTTD'])->name('mahasiswa.permintaanTTD');
Route::get('/mahasiswa/permintaanJT', [MahasiswaController::class, 'permintaanJT'])->name('mahasiswa.permintaanJT');

