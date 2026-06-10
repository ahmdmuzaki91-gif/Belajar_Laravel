<?php

use Illuminate\Support\Facades\Route;

// 1. Halaman Utama (Gerbang Direktori Mahasiswa)
Route::get('/', function () {
    return view('home');
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