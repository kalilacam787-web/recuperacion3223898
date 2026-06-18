<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaConocimiento extends Model
{
    protected $table = 'area_conocimientos'; //nombre de la tabla en la base de datos
    protected $primaryKey = 'idAreaConocimiento'; //nombre de la llave primaria en la tabla

    public function areaConocimientoEgresados()
    {
        // un area de conocimiento agrupa varios egresados
        return $this->hasMany(AreaConocimientoEgresado::class, 'idAreaConocimiento', 'idAreaConocimiento');
    }
}
