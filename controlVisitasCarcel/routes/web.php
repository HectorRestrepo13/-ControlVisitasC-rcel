<?php

// routes/web.php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PricioneroController;
use App\Http\Controllers\VisitaController;
use App\Http\Controllers\VisitanteController;

Auth::routes();

// Ruta para el controlador HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rutas para el controlador PrisioneroController
Route::get('/pricionero', [PricioneroController::class, 'index'])->name('pricionero.index');
Route::get('/pricionero/create', [PricioneroController::class, 'create'])->name('pricionero.create');
Route::post('/pricionero', [PricioneroController::class, 'store'])->name('pricionero.store');
Route::get('/pricionero/{id}', [PricioneroController::class, 'show'])->name('pricionero.show');
Route::get('/pricionero/{id}/edit', [PricioneroController::class, 'edit'])->name('pricionero.edit');
Route::put('/pricionero/{id}', [PricioneroController::class, 'update'])->name('pricionero.update');
Route::delete('/pricionero/{id}', [PricioneroController::class, 'destroy'])->name('pricionero.destroy');

// Rutas para el controlador VisitaController
Route::get('/visitas', [VisitaController::class, 'index'])->name('visitas.index');
Route::get('/visitas/create', [VisitaController::class, 'create'])->name('visitas.create');
Route::post('/visitas', [VisitaController::class, 'store'])->name('visitas.store');
Route::get('/visitas/{id}', [VisitaController::class, 'show'])->name('visitas.show');
Route::get('/visitas/{id}/edit', [VisitaController::class, 'edit'])->name('visitas.edit');
Route::put('/visitas/{id}', [VisitaController::class, 'update'])->name('visitas.update');
Route::delete('/visitas/{id}', [VisitaController::class, 'destroy'])->name('visitas.destroy');

// Rutas para el controlador VisitanteController
Route::get('/visitantes', [VisitanteController::class, 'index'])->name('visitantes.index');
Route::get('/visitantes/create', [VisitanteController::class, 'create'])->name('visitantes.create');
Route::post('/visitantes', [VisitanteController::class, 'store'])->name('visitantes.store');
Route::get('/visitantes/{id}', [VisitanteController::class, 'show'])->name('visitantes.show');
Route::get('/visitantes/{id}/edit', [VisitanteController::class, 'edit'])->name('visitantes.edit');
Route::put('/visitantes/{id}', [VisitanteController::class, 'update'])->name('visitantes.update');
Route::delete('/visitantes/{id}', [VisitanteController::class, 'destroy'])->name('visitantes.destroy');
