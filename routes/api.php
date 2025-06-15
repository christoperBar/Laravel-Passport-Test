<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

// tidak perlu bearer token
Route::middleware('throttle:3,1')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});
// perlu bearer token
Route::middleware(['auth:api', 'throttle:5,1'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::get('/top-request', [AuthController::class, 'topDivisonRequest']);
    Route::get('/top-item', [AuthController::class, 'topItem']);
});

