<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Works;

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
    Route::get('/admin/portfolio/index', [Works::class, 'adminWorksIndex'])->middleware(['auth'])->name('admin.portfolio.index');

// AJOUT D'UN WORK: FORMULAIRE
// PATTERN: admin/portfolio/add/form
// CTRL: Work
// ACTION: adminWorksAddForm
    Route::get('/admin/portfolio/add/form', [Works::class, 'adminWorksAddForm'])->middleware(['auth'])->name('admin.portfolio.add.form');

// AJOUT D'UN WORK: INSERT
// PATTERN: admin/portfolio/add
// CTRL: Work
// ACTION: adminWorksAdd
    Route::post('/admin/portfolio/add', [Works::class, 'adminWorksAdd'])->middleware(['auth'])->name('admin.portfolio.add');