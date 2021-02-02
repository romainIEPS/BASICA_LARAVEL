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

// ROUTE LISTE DES POSTS
// PATTERN: /blog
// CTRL: Posts
// ACTION: index
    Route::get('/blog', [Posts::class, 'index'])->name('blog.index');

// ROUTE LISTE DES WORKS
// PATTERN: /portfolio
// CTRL: Works
// ACTION: index
    Route::get('/portfolio', [Works::class, 'index'])->name('portfolio.index');

// ROUTE CONTACT
// PATTERN: /contact
// CTRL: -
// ACTION: -
    Route::get('/contact', function() {
        return view('contact.index');
    })->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
