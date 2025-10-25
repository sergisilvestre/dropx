<?php

use App\Http\Controllers\Store\StoreController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'store'], function () {

    Route::apiResource('store',     StoreController::class);
});
