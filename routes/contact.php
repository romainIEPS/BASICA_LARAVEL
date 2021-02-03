<?php

use Illuminate\Support\Facades\Route;

/*-----------------------------------------------------------------------------------------
    ROUTES STANDARDS
------------------------------------------------------------------------------------------*/
// ROUTE CONTACT
// PATTERN: /contact
// CTRL: -
// ACTION: -
Route::get('/contact', function() {
    return view('contact.index');
})->name('contact');