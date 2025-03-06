<?php

use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');

    Route::resource('/schedules', ScheduleController::class);
    Route::post('/schedules/{schedule}/drag',[ScheduleController::class, 'drag'])->name('schedules.drag');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
