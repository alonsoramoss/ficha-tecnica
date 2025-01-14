<?php

use App\Http\Controllers\MantenimientoController;

Route::get('/', [MantenimientoController::class, 'index']);
Route::post('/guardar', [MantenimientoController::class, 'store'])->name('guardar');
