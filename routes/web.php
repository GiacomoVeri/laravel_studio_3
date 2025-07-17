<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;

Route::resource('/articles', ArticleController::class);
Route::get('/', [HomeController::class, 'index'])->name('home.index');

