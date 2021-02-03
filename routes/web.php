<?php

use Illuminate\Support\Facades\Route;

// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: -
// ACTION: -
    Route::get('/', function () {
        return view('home.index');
    })->name('homepage');

// ROUTEUR DES WORKS
require __DIR__.'/works.php';

// ROUTEUR DES POSTS
require __DIR__.'/posts.php';

// ROUTEUR CONTACT
require __DIR__.'/contact.php';

// ROUTEUR AUTH
require __DIR__.'/auth.php';

// ROUTEUR DASHBOARD
require __DIR__.'/dashboard.php';
