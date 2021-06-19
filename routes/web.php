<?php

use App\Http\Controllers\Backend\{DashboardController, MovieController, ScheduleController};
use App\Http\Controllers\Frontend\{HomeController as FrontendHomeController, MovieController as FrontendMovieController, ScheduleController as FrontendScheduleController};
use Illuminate\Support\Facades\{Route, Auth};


Auth::routes();

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('/movies', MovieController::class)->except('show');
    Route::resource('/schedules', ScheduleController::class)->except('show');
});

Route::get('/', FrontendHomeController::class)->name('home');
Route::prefix('movies')->name('movies.')->group(function () {
    Route::get('/', [FrontendMovieController::class, 'index'])->name('index');
    Route::get('/{id}/show', [FrontendMovieController::class, 'show'])->name('show');
});
Route::prefix('schedules')->name('schedules.')->group(function () {
    Route::get('/', [FrontendScheduleController::class, 'index'])->name('index');
    Route::get('/{id}/pick-seats', [FrontendScheduleController::class, 'pickSeats'])->name('pickSeats');
});