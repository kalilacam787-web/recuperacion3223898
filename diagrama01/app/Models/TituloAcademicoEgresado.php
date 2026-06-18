<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TituloAcademicoEgresado extends Model
{
    protected $table = 'titulo_academico_egresados'; //nombre de la tabla en la base de datos
    protected $primaryKey = 'idTituloAcademicoEgresado'; //nombre de la llave primaria en la tabla

    public function egresado()
    {
        // relacion entre egresados y titulos academicos
        return $this->belongsTo(Egresado::class, 'idEgresado', 'idEgresado');
    }

    public function tituloAcademico()
    {
        // relacion entre egresados y titulos academicos
        return $this->belongsTo(TituloAcademico::class, 'idTituloAcademico', 'idTituloAcademico');
    }
}
