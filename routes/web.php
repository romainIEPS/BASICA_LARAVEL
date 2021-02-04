<?php

use Illuminate\Support\Facades\Route;

// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: -
// ACTION: -
    Route::get('/', function () {
        return view('home.index');
    })->name('homepage');

// ROUTEUR PUBLIC
require __DIR__.'/public/public.php';

// ROUTEUR AUTH
require __DIR__.'/auth.php';

// ROUTEUR ADMIN
require __DIR__.'/admin/admin.php';
