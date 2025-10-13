<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/welcome', function () {
    return view('welcome');
});


Route::prefix('/')->controller(Controllers\HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

Route::prefix('/artikel')->controller(Controllers\ArticleController::class)->group(function () {
    Route::get('/{id}', 'show')->name('article.show');
});
