<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soldier;

class ConsultasController extends Controller
{
    // consulta 2.1: listar soldados con servicios prestados
    public function soldadosServicios(){
        $soldados = Soldier::with('soldierServices.service')->get();
        return $soldados;
    }

    // consulta 2.2: listar soldados con su ubicacion organizativa
    public function soldadosUbicacion(){
        $soldados = Soldier::with(['armyCorp','quarter','company'])->get();
        return $soldados;
    }
}
