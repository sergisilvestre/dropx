<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);

// Authenticated routes
Route::group(['middleware' => 'auth:api'], function () {

    // auth
    include 'apiRoutes/auth.php';

    // roles
    include 'apiRoutes/role.php';

    // user
    include 'apiRoutes/user.php';

    // order
    include 'apiRoutes/order.php';
});


// product
include 'apiRoutes/product.php';
