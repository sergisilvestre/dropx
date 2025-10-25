<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);

// Authenticated routes
Route::group(['middleware' => 'auth:api'], function () {

    // Include auth routes | Prefix: auth
    include 'apiRoutes/auth.php';

});
