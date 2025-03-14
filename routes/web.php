<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('home');

Route::prefix('daftar-umkm')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/{product:slug}', [ProductController::class, 'show'])->name('product.show');
});

Route::get('/run-symlink', function () {
    Artisan::call('storage:link');

    return back();
});
