<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::resource('products', ProductController::class);

Route::get('/', [SiteController::class, 'index'])->name('site.index');


Route::resource('categorias', CategoriaController::class);