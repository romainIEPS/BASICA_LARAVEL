<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminWorks;

// ROUTE LISTE DES WORKS
// PATTERN: /admin/portfolio/index
// CTRL: AdminWorks
// ACTION: index
    Route::get('/admin/portfolio/index', [AdminWorks::class, 'index'])
           ->middleware(['auth'])
           ->name('admin.portfolio.index');

// AJOUT D'UN WORK: FORMULAIRE
// PATTERN: admin/portfolio/add/form
// CTRL: AdminWorks
// ACTION: addForm
    Route::get('/admin/portfolio/add/form', [AdminWorks::class, 'addForm'])
           ->middleware(['auth'])
           ->name('admin.portfolio.add.form');

// AJOUT D'UN WORK: INSERT
// PATTERN: admin/portfolio/add
// CTRL: AdminWorks
// ACTION: add
    Route::post('/admin/portfolio/add', [AdminWorks::class, 'add'])
           ->middleware(['auth'])
           ->name('admin.portfolio.add');
    
// UPDATE D'UN WORK: FORMULAIRE
// PATTERN: admin/portfolio/edit/form/{work}
// CTRL: AdminWorks
// ACTION: editForm
    Route::get('/admin/portfolio/edit/form/{work}', [AdminWorks::class, 'editForm'])
           ->middleware(['auth'])
           ->where('work', '[1-9][0-9]*')
           ->name('admin.portfolio.edit.form');

// UPDATE D'UN WORK
// PATTERN: admin/portfolio/edit/{work}
// CTRL: AdminWorks
// ACTION: edit
    Route::post('/admin/portfolio/edit/{work}', [AdminWorks::class, 'edit'])
           ->middleware(['auth'])
           ->where('work', '[1-9][0-9]*')
           ->name('admin.portfolio.edit');

// DELETE D'UN WORK
// PATTERN: admin/portfolio/delete/{work}
// CTRL: AdminWorks
// ACTION: delete
    Route::get('/admin/portfolio/delete/{work}', [AdminWorks::class, 'delete'])
           ->middleware(['auth'])
           ->where('work', '[1-9][0-9]*')
           ->name('admin.portfolio.delete');