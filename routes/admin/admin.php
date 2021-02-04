<?php

use Illuminate\Support\Facades\Route;

// ROUTE DASHBOARD
// PATTERN: /dashboard
// CTRL: -
// ACTION: -
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->middleware(['auth'])->name('dashboard');

// ROUTEUR ADMIN: WORKS
require __DIR__.'/works.php';

// ROUTEUR ADMIN: POSTS
require __DIR__.'/posts.php';


