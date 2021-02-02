<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
