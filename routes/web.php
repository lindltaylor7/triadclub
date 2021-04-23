<?php

use App\Http\Controllers\Admin\RubroController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\OfertaController;
use App\Models\Empresa;
use Illuminate\Support\Facades\Route;



Route::get('/',[EmpresaController::class, 'index'])->name('index');

Route::get('/registro',[EmpresaController::class, 'register'])->name('registro');

Route::post('/registro',[EmpresaController::class, 'regUser'])->name('reg');

Route::post('/registro-empresa',[EmpresaController::class, 'regEnt'])->name('reg2');

Route::get('landing/{empresa}',[EmpresaController::class, 'landing'])->name('landing');


Route::get('ofertas/{oferta}', [OfertaController::class, 'show'])->name('ofertas.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('rubro/{rubro}',[EmpresaController::class,'rubro'])->name('empresas.rubro');
