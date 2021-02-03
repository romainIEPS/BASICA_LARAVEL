<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Works;


/*-----------------------------------------------------------------------------------------
    ROUTES STANDARDS
------------------------------------------------------------------------------------------*/
// ROUTE LISTE DES WORKS
// PATTERN: /portfolio
// CTRL: Works
// ACTION: index
    Route::get('/portfolio', [Works::class, 'index'])->name('portfolio.index');

// ROUTE DETAIL D'UN WORK
// PATTERN: /portfolio/{work}/{slug}
// CTRL: Works
// ACTION: show
    Route::get('/portfolio/{work}/{slug}', [Works::class, 'show'])
    ->where('work', '[1-9][0-9]*')
    ->name('portfolio.show');

/*-----------------------------------------------------------------------------------------
    ROUTES AJAX
------------------------------------------------------------------------------------------*/
// ROUTE AJAX MORE WORKS
// PATTERN: /works/ajax/more
// CTRL: Works
// ACTION: more
    Route::get('/posts/ajax/more', [Works::class, 'more'])->name('works.ajax.more');