<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPosts;

// ROUTE LISTE DES POSTS
// PATTERN: /admin/posts/index
// CTRL: AdminPosts
// ACTION: index
    Route::get('/admin/posts/index', [AdminPosts::class, 'index'])
           ->middleware(['auth'])
           ->name('admin.posts.index');

// AJOUT D'UN POST: FORMULAIRE
// PATTERN: admin/posts/add/form
// CTRL: AdminPosts
// ACTION: addForm
    Route::get('/admin/posts/add/form', [AdminPosts::class, 'addForm'])
           ->middleware(['auth'])
           ->name('admin.posts.add.form');

// AJOUT D'UN POST: INSERT
// PATTERN: admin/posts/add
// CTRL: AdminPosts
// ACTION: add
    Route::post('/admin/posts/add', [AdminPosts::class, 'add'])
           ->middleware(['auth'])
           ->name('admin.posts.add');

// UPDATE D'UN POST: FORMULAIRE
// PATTERN: admin/posts/edit/form/{post}
// CTRL: AdminPosts
// ACTION: editForm
    Route::get('/admin/posts/edit/form/{post}', [AdminPosts::class, 'editForm'])
           ->middleware(['auth'])
           ->where('posts', '[1-9][0-9]*')
           ->name('admin.posts.edit.form');

// UPDATE D'UN POST
// PATTERN: admin/posts/edit/{post}
// CTRL: AdminPosts
// ACTION: edit
    Route::post('/admin/posts/edit/{post}', [AdminPosts::class, 'edit'])
           ->middleware(['auth'])
           ->where('posts', '[1-9][0-9]*')
           ->name('admin.posts.edit');

// DELETE D'UN POST
// PATTERN: admin/posts/delete/{post}
// CTRL: AdminPosts
// ACTION: delete
    Route::get('/admin/posts/delete/{post}', [AdminPosts::class, 'delete'])
           ->middleware(['auth'])
           ->where('posts', '[1-9][0-9]*')
           ->name('admin.posts.delete');