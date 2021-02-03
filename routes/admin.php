<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Works;

// ROUTE DASHBOARD
// PATTERN: /dashboard
// CTRL: -
// ACTION: -
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->middleware(['auth'])->name('dashboard');

// ROUTE LISTE DES WORKS
// PATTERN: /dashboard/portfolio/index
// CTRL: -
// ACTION: -
    Route::get('/admin/portfolio/index', [Works::class, 'adminWorksIndex'])->middleware(['auth'])->name('admin.portfolio.index');