<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agencia;
use App\Models\Particular;
use App\Models\Hotel;

class ConsultasController extends Controller
{
    public function reservasAgencia(){
        // obtiene las reservas gestionadas por agencias
        $agencias = Agencia::with('reservaAgencias.habitacion')->get();
        return $agencias;
    }

    public function reservasParticulares(){
        // obtiene las reservas gestionadas por particulares
        $particulares = Particular::with('reservaParticulars.habitacion')->get();
        return $particulares;
    }

    public function hotelesCategoria(){
        // obtiene los hoteles con su categoria asignada
        $hoteles = Hotel::with('categoria')->get();
        return $hoteles;
    }

}
