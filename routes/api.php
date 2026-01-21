<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'verified']) // add 'verified' if you use email verification
    ->group(function () {

        Route::get('dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        // Or with controller:
        // Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

        // Examples of other routes
        Route::get('users',         fn() => view('admin.users.index'))->name('users.index');
        Route::get('settings',      fn() => view('admin.settings'))->name('settings');

    });