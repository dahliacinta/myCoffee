<?php

use App\Http\Controllers\BookingController;
use App\Models\Booking;

Route::get('/', function () {
    return view('home');
})->name('home');

// Move booking store route outside auth middleware (allow guests to submit, but check in controller)
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Other booking routes (protected - require login)
    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
    Route::get('/bookings/{booking}/edit', [BookingController::class, 'edit'])->name('bookings.edit');
    Route::put('/bookings/{booking}', [BookingController::class, 'update'])->name('bookings.update');
    Route::delete('/bookings/{booking}', [BookingController::class, 'destroy'])->name('bookings.destroy');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/packages', function () {
        return view('packages'); // Assuming you have a packages.blade.php view
    })->name('packages');
});