<?php

use App\Http\Controllers\Role\RoleController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'role'], function () {

    Route::apiResource('role',     RoleController::class);

    Route::prefix('user/{user}')->group(function () {

        // Route::post('assign',       [RolesUserController::class, 'assignRoleToUser'])->name('roles.user.assign');
        // Route::post('remove',       [RolesUserController::class, 'removeRoleFromUser'])->name('roles.user.remove');
        // Route::get('roles',         [RolesUserController::class, 'listUserRoles'])->name('roles.user.list');
    });
});
