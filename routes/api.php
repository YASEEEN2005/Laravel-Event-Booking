<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/events', [EventController::class, 'index']);
Route::get('/events/{id}', [EventController::class, 'show']);

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

   Route::middleware(['auth:sanctum', 'admin'])->group(function () {

    Route::post('/events', [EventController::class, 'store']);

    Route::put('/events/{id}', [EventController::class, 'update']);

    Route::delete('/events/{id}', [EventController::class, 'destroy']);
});
});