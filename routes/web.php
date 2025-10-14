<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::prefix('/')->controller(Controllers\HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

Route::prefix('/artikel')->controller(Controllers\ArticleController::class)->group(function () {
    Route::get('/', 'index')->name('article.index');
    Route::get('/{id}', 'show')->name('article.show');
});

Route::prefix('/halaman')->controller(Controllers\PageController::class)->group(function () {
    Route::get('/{id}', 'show')->name('page.show');
});

Route::prefix('/galeri')->controller(Controllers\GaleryController::class)->group(function () {
    Route::get('/', 'index')->name('galery.index');
    Route::get('/{id}', 'show')->name('galery.show');
});
