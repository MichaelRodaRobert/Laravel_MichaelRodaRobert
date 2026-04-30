<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswas/{nama}', [MahasiswaController::class, 'show']);
Route::get('/prodi', [ProdiController::class, 'index']);
