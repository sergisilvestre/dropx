<?php

use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'product'], function () {

    Route::apiResource('product',     ProductController::class);
});
