<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', [WebController::class, 'home'])->name('home');
Route::get('/events', [WebController::class, 'eventsIndex'])->name('events.index');
Route::get('/events/{id}', [WebController::class, 'eventShow'])->name('events.show');
Route::get('/about', [WebController::class, 'about'])->name('about');
Route::get('/contact', [WebController::class, 'contact'])->name('contact');

Route::get('/login', [WebController::class, 'loginForm'])->name('login');
Route::post('/login', [WebController::class, 'login']);
Route::get('/register', [WebController::class, 'registerForm'])->name('register');
Route::post('/register', [WebController::class, 'register']);
Route::post('/logout', [WebController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/my-bookings', [WebController::class, 'myBookings'])->name('bookings.index');
    Route::post('/events/{id}/book', [WebController::class, 'book'])->name('events.book');
    Route::post('/bookings/{id}/cancel', [WebController::class, 'cancelBooking'])->name('bookings.cancel');

    Route::get('/admin', [WebController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/admin/events', [WebController::class, 'adminEvents'])->name('admin.events');
    Route::get('/admin/users', [WebController::class, 'adminUsers'])->name('admin.users');
    Route::get('/admin/events/create', [WebController::class, 'adminCreateEvent'])->name('admin.events.create');
    Route::post('/admin/events', [WebController::class, 'adminStoreEvent'])->name('admin.events.store');
    Route::get('/admin/events/{id}/edit', [WebController::class, 'adminEditEvent'])->name('admin.events.edit');
    Route::put('/admin/events/{id}', [WebController::class, 'adminUpdateEvent'])->name('admin.events.update');
    Route::delete('/admin/events/{id}', [WebController::class, 'adminDeleteEvent'])->name('admin.events.destroy');
});
