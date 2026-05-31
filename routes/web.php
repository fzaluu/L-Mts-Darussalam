<?php




use App\Http\Controllers\SdmController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KontakController;
// area publik di aksess
Route::get('/', function () {
    return view('index');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/Sdm', [SdmController::class, 'index']);
Route::post('/kontak-kirim', [KontakController::class, 'store'])->name('kontak.store');


// untuk yang belum login
Route::middleware('guest')->group(function () {
    // 1. Menampilkan halaman form login
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    
    // 2. Memproses data yang dikirim dari form login
    Route::post('/login', [AuthController::class, 'login'])->name('login.proses');
});

// Jalur untuk pengguna yang SUDAH LOGIN (Auth)
Route::middleware('auth')->group(function () {
    // user akan diarahkan ke halaman dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard'); // 
    })->name('admin.dashboard');
    // ini data siswa
    Route::get('/admin/siswa', function() {
        return view('admin.siswa.index');
    });
    // ini data guru
    Route::get('/admin/guru', function() {
        return view('admin.guru.index');
    });
    // ini data kontak
    Route::get('/admin/kontak', [KontakController::class , 'index'])->name('admin.kontak.index');
    Route::delete('/admin/kontak/{id}', [KontakController::class , 'destroy'])->name('admin.kontak.destroy');
    // ini data prestasi
    Route::get('/admin/prestasi', function() {
        return view('admin.prestasi.index');
    });
    // ini data kelas
    Route::get('/admin/kelas', function() {
        return view('admin.kelas.index');
    });
    // CRUD users

    Route::resource('users', UserController::class);

    // Jalur untuk Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});



//SDM
// Route::get('/Sdm', [SdmController::class, 'index']);
// Route::get('/Sdm/tambah', [SdmController::class, 'create']);
// Route::post('/Sdm/simpan', [SdmController::class, 'store']);
// Route::get('/Sdm/edit/{id}', [SdmController::class, 'edit']);
// Route::put('/Sdm/update/{id}', [SdmController::class, 'update']);   
// Route::delete('/Sdm/hapus/{id}', [SdmController::class, 'destroy']);
Route::get('/admin/guru', [SdmController::class, 'index']);
Route::get('/sdm', [SdmController::class, 'sdm']);
Route::get('/admin/guru/create', [SdmController::class, 'create']);
Route::post('/admin/guru', [SdmController::class, 'store']);
Route::get('/admin/guru/{id}/edit', [SdmController::class, 'edit']);
Route::put('/admin/guru/{id}', [SdmController::class, 'update']);
Route::delete('/admin/guru/{id}', [SdmController::class, 'destroy']);

