<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PortofolioController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::resource('mahasiswa', MahasiswaController::class);
   
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/portofolio', [PortofolioController::class, 'index'])
        ->name('portofolio.index');


});

Route::get('/my-profile', function () {
    return view('profile.user');
})->middleware('auth')->name('my.profile');
require __DIR__.'/auth.php';
use App\Http\Controllers\DosenController;

Route::middleware(['auth'])->group(function () {

    Route::get('/dosen', [DosenController::class, 'index'])
        ->name('dosen.index');

});