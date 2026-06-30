<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PortofolioApiController;

Route::get('/portofolio', [PortofolioApiController::class, 'index']);
Route::get('/portofolio/{id}', [PortofolioApiController::class, 'show']);
Route::post('/portofolio', [PortofolioApiController::class, 'store']);
Route::put('/portofolio/{id}', [PortofolioApiController::class, 'update']);
Route::delete('/portofolio/{id}', [PortofolioApiController::class, 'destroy']);

use App\Http\Controllers\ProductController;
Route::apiResource('products', ProductController::class);