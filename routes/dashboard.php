<?php

use Illuminate\Support\Facades\Route;

// ROUTE DASHBOARD
// PATTERN: /dashboard
// CTRL: -
// ACTION: -
    Route::get('/dashboard', [function () {
        return view('dashboard.index');
    }])->middleware(['auth'])->name('dashboard');