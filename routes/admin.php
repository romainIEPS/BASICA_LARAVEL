<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Works;
use App\Http\Controllers\Posts;

// ROUTE DASHBOARD
// PATTERN: /dashboard
// CTRL: -
// ACTION: -
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->middleware(['auth'])->name('dashboard');

// ROUTE LISTE DES WORKS
// PATTERN: /admin/portfolio/index
// CTRL: Work
// ACTION: adminWorksIndex
    Route::get('/admin/portfolio/index', [Works::class, 'adminWorksIndex'])
           ->middleware(['auth'])
           ->name('admin.portfolio.index');

// AJOUT D'UN WORK: FORMULAIRE
// PATTERN: admin/portfolio/add/form
// CTRL: Work
// ACTION: adminWorksAddForm
    Route::get('/admin/portfolio/add/form', [Works::class, 'adminWorksAddForm'])
           ->middleware(['auth'])
           ->name('admin.portfolio.add.form');

// AJOUT D'UN WORK: INSERT
// PATTERN: admin/portfolio/add
// CTRL: Work
// ACTION: adminWorksAdd
    Route::post('/admin/portfolio/add', [Works::class, 'adminWorksAdd'])
           ->middleware(['auth'])
           ->name('admin.portfolio.add');
    
// UPDATE D'UN WORK: FORMULAIRE
// PATTERN: admin/portfolio/edit/form/{work}
// CTRL: Work
// ACTION: adminWorksEditForm
    Route::get('/admin/portfolio/edit/form/{work}', [Works::class, 'adminWorksEditForm'])
           ->middleware(['auth'])
           ->where('work', '[1-9][0-9]*')
           ->name('admin.portfolio.edit.form');

// UPDATE D'UN WORK
// PATTERN: admin/portfolio/edit/{edit}
// CTRL: Work
// ACTION: adminWorksEdit
    Route::post('/admin/portfolio/edit/{work}', [Works::class, 'adminWorksEdit'])
           ->middleware(['auth'])
           ->where('work', '[1-9][0-9]*')
           ->name('admin.portfolio.edit');

// DELETE D'UN WORK
// PATTERN: admin/portfolio/delete/{work}
// CTRL: Work
// ACTION: adminWorksDelete
    Route::get('/admin/portfolio/delete/{work}', [Works::class, 'adminWorksDelete'])
           ->middleware(['auth'])
           ->where('work', '[1-9][0-9]*')
           ->name('admin.portfolio.delete');

// ROUTE LISTE DES POSTS
// PATTERN: /admin/posts/index
// CTRL: Post
// ACTION: adminPostsIndex
    Route::get('/admin/posts/index', [Posts::class, 'adminPostsIndex'])
           ->middleware(['auth'])
           ->name('admin.posts.index');

// AJOUT D'UN POST: FORMULAIRE
// PATTERN: admin/posts/add/form
// CTRL: Post
// ACTION: adminPostsAddForm
    Route::get('/admin/posts/add/form', [Posts::class, 'adminPostsAddForm'])
           ->middleware(['auth'])
           ->name('admin.posts.add.form');

// AJOUT D'UN POST: INSERT
// PATTERN: admin/posts/add
// CTRL: Post
// ACTION: adminPostsAdd
Route::post('/admin/posts/add', [Posts::class, 'adminPostsAdd'])
->middleware(['auth'])
->name('admin.posts.add');

// UPDATE D'UN POST: FORMULAIRE
// PATTERN: admin/posts/edit/form/{post}
// CTRL: Post
// ACTION: adminPostsEditForm
    Route::get('/admin/posts/edit/form/{post}', [Posts::class, 'adminPostsEditForm'])
           ->middleware(['auth'])
           ->where('posts', '[1-9][0-9]*')
           ->name('admin.posts.edit.form');