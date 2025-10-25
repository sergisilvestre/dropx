<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'order'], function () {

    Route::apiResource('order',     OrderController::class);
});
