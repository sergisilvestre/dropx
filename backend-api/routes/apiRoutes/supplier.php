<?php

use App\Http\Controllers\Supplier\SupplierController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'supplier'], function () {

    Route::apiResource('supplier',     SupplierController::class);
});
