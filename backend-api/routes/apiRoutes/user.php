<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'user'], function () {

    Route::apiResource('user',     UserController::class);
});
