<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultasController;

// consulta egresados con sus titulos academicos
Route::get('titulos', [ConsultasController::class, 'egresadosTitulos']);

// consulta egresados con su ubicacion geografica
Route::get('ubicacion', [ConsultasController::class, 'egresadosUbicacion']);

// consulta egresados con sus empresas asociadas
Route::get('empresas', [ConsultasController::class, 'egresadosEmpresas']);
