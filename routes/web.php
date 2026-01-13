<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk menampilkan data mahasiswa (Web Tabular)
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
// Route untuk tampilkan form tambah mahasiswa
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);

// Route untuk simpan data mahasiswa baru
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);

// Route untuk tampilkan form edit mahasiswa
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);

// Route untuk update data mahasiswa
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);

// Route untuk hapus data mahasiswa
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy']);