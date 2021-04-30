<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

//Route::get('index',[DashboardController::class, 'index'])->name('dashboard.index');

//Route::get('redes/create', [DashboardController::class, 'create'])->name('dashboard.create');

//Route::get('redes/{id}/edit', [DashboardController::class, 'edit'])->name('dashboard.edit');
Route::resource('redes', DashboardController::class)->names('dash.redes');

//Route::get('')

//Route::get('index/');