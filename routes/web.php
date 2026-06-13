<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;

Route::get('/', function () {
    $mahasiswa = Mahasiswa::all();
    return view('home', compact('mahasiswa'));
});
Route::resource('mahasiswa', MahasiswaController::class);