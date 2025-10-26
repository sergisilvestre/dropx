<?php

Illuminate\Support\Facades\Route::get('/', fn () => view('home'));
Illuminate\Support\Facades\Route::get('products',  [App\Http\Controllers\Product\ProductController::class, 'index']);
