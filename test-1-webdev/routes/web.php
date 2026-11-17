<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('products.index'));

// Route::resource otomatis bikin route index, create, store, show, edit, update, destroy
Route::resource('products', ProductController::class);
