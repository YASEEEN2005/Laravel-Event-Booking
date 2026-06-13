<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BookingController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/events', [EventController::class, 'index']);
Route::get('/events/{id}', [EventController::class, 'show']);

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('/events/{id}/book', [BookingController::class, 'book']);

    Route::get('/my-bookings', [BookingController::class, 'myBookings']);

    Route::delete('/bookings/{id}', [BookingController::class, 'cancelBooking']);

    Route::middleware('admin')->group(function () {

        Route::post('/events', [EventController::class, 'store']);

        Route::put('/events/{id}', [EventController::class, 'update']);

        Route::delete('/events/{id}', [EventController::class, 'destroy']);
    });
});