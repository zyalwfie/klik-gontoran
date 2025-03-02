<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('home');

Route::get('/daftar-umkm', [ProductController::class, 'index'])->name('product.index');
Route::get('/daftar-umkm/{product:slug}', [ProductController::class, 'show'])->name('product.show');
