<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('articles')->group(function () {
    Route::get('/', [\App\Http\Controllers\ArticlesController::class, 'index'])->name('index');
    Route::get('create', [\App\Http\Controllers\ArticlesController::class, 'create'])->name('create');
    Route::post('store', [\App\Http\Controllers\ArticlesController::class, 'store'])->name('store');
    Route::get('show/{id}', [\App\Http\Controllers\ArticlesController::class, 'show'])->name('show');
    Route::get('update/{id}', [\App\Http\Controllers\ArticlesController::class, 'update'])->name('update');
});

