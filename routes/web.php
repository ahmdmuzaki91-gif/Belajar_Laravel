<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;

// 1. Halaman Utama (Gerbang Direktori Mahasiswa)
Route::get('/', function () {
    $mahasiswa = Mahasiswa::all();
    return view('home', compact('mahasiswa'));
});

// 2. Daftar Rute Profil Anggota Kelompok
Route::get('/profile/ahmad-muzaki', function () {
    return view('pages.muzaki');
});

Route::get('/profile/mahasiswa-dua', function () {
    return view('pages.Ria'); 
});

Route::get('/profile/mahasiswa-tiga', function () {
    return view('pages.Annisa'); 
});
Route::resource('mahasiswa', MahasiswaController::class);