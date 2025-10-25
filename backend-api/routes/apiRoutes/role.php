<?php

use App\Http\Controllers\Roles\RolesController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'roles'], function () {

    Route::apiResource('roles',     RolesController::class);

    Route::prefix('user/{user}')->group(function () {

        // Route::post('assign',       [RolesUserController::class, 'assignRoleToUser'])->name('roles.user.assign');
        // Route::post('remove',       [RolesUserController::class, 'removeRoleFromUser'])->name('roles.user.remove');
        // Route::get('roles',         [RolesUserController::class, 'listUserRoles'])->name('roles.user.list');
    });
});
