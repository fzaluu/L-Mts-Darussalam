<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('index');
});

Route::get('/profil', function () {
    return view('profil');
});

// Jalur untuk pengguna yang BELUM LOGIN (Guest)
Route::middleware('guest')->group(function () {
    // 1. Menampilkan halaman form login
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    
    // 2. Memproses data yang dikirim dari form login
    Route::post('/login', [AuthController::class, 'login'])->name('login.proses');
});

// Jalur untuk pengguna yang SUDAH LOGIN (Auth)
Route::middleware('auth')->group(function () {
    // Halaman utama setelah berhasil login (Dashboard)
    Route::get('/dashboard', function () {
        return view('admin.dashboard'); // Pastikan nanti kamu punya file dashboard.blade.php
    })->name('admin.    dashboard');

    // Jalur CRUD User yang kodenya sudah kamu buat tadi
    Route::resource('users', UserController::class);

    // Jalur untuk Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
