<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('redes/{id}',[DashboardController::class, 'index'])->name('dashboard.index');


Route::resource('redes', DashboardController::class)->names('dash.redes');


