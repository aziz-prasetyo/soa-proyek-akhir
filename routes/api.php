<?php

use App\Http\Controllers\Api\V1\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->group(function () {

    // Admin Routes
    Route::middleware('is_admin')->group(function () {
        Route::get('/users', [UserApiController::class, 'index']);
    });
});