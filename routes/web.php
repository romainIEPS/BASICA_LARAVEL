<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;
use App\Http\Controllers\Works;

// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: -
// ACTION: -
    Route::get('/', function () {
        return view('home.index');
    })->name('homepage');
    
// ROUTE PAR DEFAUT
// PATTERN: /dashboard
// CTRL: -
// ACTION: -
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');


// ROUTE DES WORKS
require __DIR__.'/works.php';

// ROUTE DES POSTS
require __DIR__.'/posts.php';

// ROUTE CONTACT
require __DIR__.'/contact.php';

// ROUTE AUTH
require __DIR__.'/auth.php';
