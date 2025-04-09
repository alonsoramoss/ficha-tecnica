<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\SoporteController;
use App\Http\Controllers\DatosController;

Route::get('/', [SoporteController::class, 'index']);
Route::post('/guardar', [SoporteController::class, 'store'])->name('guardar');

Route::get('/datos', [DatosController::class, 'index'])->name('datos.index');
Route::get('/datos/buscar', [DatosController::class, 'buscar'])->name('datos.buscar');
Route::get('/datos/{id}/edit', [DatosController::class, 'edit'])->name('datos.edit');
Route::put('/datos/{id}', [DatosController::class, 'update'])->name('datos.update');