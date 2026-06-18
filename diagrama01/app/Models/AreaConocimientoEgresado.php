<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaConocimientoEgresado extends Model
{
    protected $table = 'area_conocimiento_egresados'; //nombre de la tabla en la base de datos
    protected $primaryKey = 'idAreaConocimientoEgresado'; //nombre de la llave primaria en la tabla

    public function egresado()
    {
        // relacion entre egresados y areas de conocimiento
        return $this->belongsTo(Egresado::class, 'idEgresado', 'idEgresado');
    }

    public function areaConocimiento()
    {
        // relacion entre egresados y areas de conocimiento
        return $this->belongsTo(AreaConocimiento::class, 'idAreaConocimiento', 'idAreaConocimiento');
    }
}
