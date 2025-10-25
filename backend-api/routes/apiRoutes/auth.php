<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'auth'], function () {

    Route::get('user', fn() => auth('api')->user())->name('user');

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});
