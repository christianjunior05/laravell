<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ReservationController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
