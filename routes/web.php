<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ReviewPortofolioController;
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

    Route::resource('portofolio', PortofolioController::class);

});

Route::get('/my-profile', function () {
    return view('profile.user');
})->middleware('auth')->name('my.profile');
require __DIR__.'/auth.php';
use App\Http\Controllers\DosenController;

Route::middleware(['auth'])->group(function () {

    Route::get('/dosen/data-mahasiswa', [DosenController::class, 'dataMahasiswa'])
        ->name('dosen.mahasiswa');

    Route::get('/dosen/review-portofolio', [ReviewPortofolioController::class, 'index'])
         ->name('review.index');

    Route::patch('/dosen/review-portofolio/{id}/approve', [ReviewPortofolioController::class, 'approve'])
        ->name('review.approve');

    Route::patch('/dosen/review-portofolio/{id}/reject', [ReviewPortofolioController::class, 'reject'])
        ->name('review.reject');
});