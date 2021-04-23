<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\EmpresaController;
use App\Http\Controllers\Admin\OfertaController;
use App\Http\Controllers\Admin\RubroController;
use App\Http\Controllers\Admin\SliderController;





Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('empresas', EmpresaController::class)->names('admin.empresas');

Route::resource('rubros', RubroController::class)->names('admin.rubros');

Route::resource('ofertas', OfertaController::class)->names('admin.ofertas');

Route::resource('sliders', SliderController::class)->names('admin.sliders');
