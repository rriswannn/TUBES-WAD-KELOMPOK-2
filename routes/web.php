<?php

use App\Http\Controllers\TrashController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;

// Rute halaman beranda
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute untuk menampilkan formulir login dan proses login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Rute untuk menampilkan formulir registrasi dan proses registrasi
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Rute untuk proses logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Middleware untuk memeriksa apakah pengguna sudah login
Route::middleware(['auth'])->group(function () {
    // Rute untuk membuat sampah baru
    Route::get('/trash/create', [TrashController::class, 'create'])->name('trash.create');
    Route::post('/trash/store', [TrashController::class, 'store'])->name('trash.store');

    // Rute untuk halaman history
    Route::get('/history', [HistoryController::class, 'index'])->name('history');

    // Rute untuk informasi pengangkutan
    Route::get('/trash/info/{id}', [TrashController::class, 'showInfo'])->name('trash.info');

    // Rute untuk stay di sini jika sudah menambahkan sampah
    Route::post('/trash/stay', [TrashController::class, 'stay'])->name('trash.stay');

    // Rute untuk tracking
    Route::get('/track/{id}', [TrashController::class, 'track'])->name('trash.track');

    // Rute untuk menandai pesanan sebagai selesai
    Route::post('/trash/complete/{id}', [TrashController::class, 'complete'])->name('trash.complete');

    // Rute hapus history
    Route::delete('/trash/{id}', [TrashController::class, 'destroy'])->name('trash.destroy');

    // Rute hapus semua history
    Route::post('/trash/destroy-all', [TrashController::class, 'destroyAll'])->name('trash.destroyAll');
});

// Rute untuk halaman tentang
Route::get('/about', [AboutController::class, 'index'])->name('about');
