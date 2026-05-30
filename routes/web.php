<?php

use App\Http\Controllers\SdmController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//SDM
Route::get('/Sdm', [SdmController::class, 'index']);
Route::get('/Sdm/tambah', [SdmController::class, 'create']);
Route::post('/Sdm/simpan', [SdmController::class, 'store']);
Route::get('/Sdm/edit/{id}', [SdmController::class, 'edit']);
Route::put('/Sdm/update/{id}', [SdmController::class, 'update']);   
Route::delete('/Sdm/hapus/{id}', [SdmController::class, 'destroy']);