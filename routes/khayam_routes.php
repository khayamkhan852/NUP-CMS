<?php

use App\Http\Controllers\CollegeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DisciplineController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::prefix('settings')->name('settings.')->group(function () {
        Route::resource('disciplines', DisciplineController::class)->except(['destroy', 'show']);
        Route::resource('colleges', CollegeController::class);
    });

});
