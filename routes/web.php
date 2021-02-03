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

// ROUTE DETAIL D'UN WORK
// PATTERN: /portfolio/{work}/{slug}
// CTRL: Works
// ACTION: show
    Route::get('/portfolio/{work}/{slug}', [Works::class, 'show'])
           ->where('work', '[1-9][0-9]*')
           ->name('portfolio.show');

// ROUTE DETAIL D'UN POST
// PATTERN: /portfolio/{post}/{slug}
// CTRL: Posts
// ACTION: show
    Route::get('/blog/{post}/{slug}', [Posts::class, 'show'])
    ->where('post', '[1-9][0-9]*')
    ->name('blog.show');

// ROUTE AJAX MORE WORKS
// PATTERN: /works/ajax/more
// CTRL: Works
// ACTION: more
    Route::get('/posts/ajax/more', [Works::class, 'more'])->name('works.ajax.more');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
