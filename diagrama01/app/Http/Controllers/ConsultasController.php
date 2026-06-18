<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Egresado;

class ConsultasController extends Controller
{
    public function egresadosTitulos(){
        // obtiene egresados con sus titulos academicos
        $egresados = Egresado::with(['tituloAcademicoEgresados.tituloAcademico'])->get();
        return $egresados;
    }

    public function egresadosUbicacion(){
        // obtiene egresados con su ubicacion geografica
        $egresados = Egresado::with(['ciudad.departamento.pais'])->get();
        return $egresados;
    }

    public function egresadosEmpresas(){
        // obtiene egresados con sus empresas asociadas
        $egresados = Egresado::with(['empresaEgresados.empresa'])->get();
        return $egresados;
    }

}
