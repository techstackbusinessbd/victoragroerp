<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PermissionController;

Route::prefix('admin') // URL prefix: /admin/*
    ->name('admin.')   // Route name prefix: admin.*
    ->middleware(['auth']) // Optional middleware
    ->group(function () {

        // -------------------------
        // Users Resource Routes
        // -------------------------
        Route::resource('users', UserController::class);

        // -------------------------
        // Roles Resource Routes
        // -------------------------
        Route::resource('roles', RoleController::class);

        // -------------------------
        // Permissions Resource Routes
        // -------------------------
        Route::resource('permissions', PermissionController::class);

        // -------------------------
        // Example: Custom Route in the group
        // -------------------------
        Route::get('dashboard', function() {
            return view('admin.dashboard');
        })->name('dashboard');

});
