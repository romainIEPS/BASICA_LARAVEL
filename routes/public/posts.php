<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;


/*-----------------------------------------------------------------------------------------
    ROUTES STANDARDS
------------------------------------------------------------------------------------------*/
// ROUTE LISTE DES POSTS
// PATTERN: /blog
// CTRL: Posts
// ACTION: index
    Route::get('/blog', [Posts::class, 'index'])->name('blog.index');

// ROUTE DETAIL D'UN POST
// PATTERN: /portfolio/{post}/{slug}
// CTRL: Posts
// ACTION: show
    Route::get('/blog/{post}/{slug}', [Posts::class, 'show'])
    ->where('post', '[1-9][0-9]*')
    ->name('blog.show');