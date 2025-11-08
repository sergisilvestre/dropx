<?php

use App\Http\Controllers\Order\OrderController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'order'], function () {

    Route::apiResource('order',     OrderController::class);
});
