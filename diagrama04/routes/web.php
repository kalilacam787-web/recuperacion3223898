<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConsultasController;

Route::get('/reservasAgencia', [ConsultasController::class, 'reservasAgencia']);
Route::get('/reservasParticular', [ConsultasController::class, 'reservasParticulares']);
Route::get('/hotelesCategoria', [ConsultasController::class, 'hotelesCategoria']);
