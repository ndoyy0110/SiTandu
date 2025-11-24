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
Route::get('/mahasiswa/history', [MahasiswaController::class, 'history'])->name('mahasiswa.history');
Route::get('/mahasiswa/disetujuiTTD', [MahasiswaController::class, 'disetujuiTTD'])->name('mahasiswa.disetujuiTTD');
Route::get('/mahasiswa/jadwalUlang', [MahasiswaController::class, 'jadwalUlang'])->name('mahasiswa.jadwalUlang');
Route::get('/mahasiswa/revisi', [MahasiswaController::class, 'revisi'])->name('mahasiswa.revisi');
Route::get('/mahasiswa/ditolak', [MahasiswaController::class, 'ditolak'])->name('mahasiswa.ditolak');
Route::get('mahasiswa/menunggu',[MahasiswaController::class, 'menunggu'])->name('mahasiswa.menunggu');
Route::get('mahasiswa/disetujuiJT',[MahasiswaController::class, 'disetujuiJT'])->name('mahasiswa.disetujuiJT');

Route::get('/mahasiswa/tracking/selesaiJT', [MahasiswaController::class, 'selesaiTrackingJT'])->name('mahasiswa.selesaiTrackingJT');
Route::get('/mahasiswa/tracking/menungguJT', [MahasiswaController::class, 'menungguTrackingJT'])->name('mahasiswa.menungguTrackingJT');
Route::get('/mahasiswa/tracking/jadwalUlang', [MahasiswaController::class, 'jadwalUlangTrackingJT'])->name('mahasiswa.jadwalUlangTrackingJT');
Route::get('/mahasiswa/tracking/dibaca', [MahasiswaController::class, 'dibacaTrackingTTD'])->name('mahasiswa.dibacaTrackingTTD');
Route::get('/mahasiswa/tracking/revisi', [MahasiswaController::class, 'revisiTrackingTTD'])->name('mahasiswa.revisiTrackingTTD');
Route::get('/mahasiswa/tracking/ditolak', [MahasiswaController::class, 'ditolakTrackingTTD'])->name('mahasiswa.ditolakTrackingTTD');
Route::get('mahasiswa/tracking/selesaiTTD',[MahasiswaController::class, 'selesaiTrackingTTD'])->name('mahasiswa.selesaiTrackingTTD');

Route::get('admin/home', function () {
    return view('admin.home');
});
