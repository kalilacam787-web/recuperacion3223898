<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConsultasController;

Route::get('/soldadoServicio', [ConsultasController::class, 'soldadosServicios']);
Route::get('/soldadoUbicacion', [ConsultasController::class, 'soldadosUbicacion']);   