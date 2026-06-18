<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Egresado extends Model
{
    protected $table = 'egresados'; //nombre de la tabla en la base de datos
    protected $primaryKey = 'idEgresado'; //nombre de la llave primaria en la tabla

    public function ciudad()
    {
        // ubica al egresado en su ciudad
        return $this->belongsTo(Ciudad::class, 'idCiudad', 'idCiudad');
    }

    public function empresaEgresados()
    {
        // relacion de egresados con empresas asociadas
        return $this->hasMany(EmpresaEgresado::class, 'idEgresado', 'idEgresado');
    }

    public function areaConocimientoEgresados()
    {
        // relacion de egresados con areas de conocimiento
        return $this->hasMany(AreaConocimientoEgresado::class, 'idEgresado', 'idEgresado');
    }

    public function tituloAcademicoEgresados()
    {
        // relacion de egresados con titulos academicos
        return $this->hasMany(TituloAcademicoEgresado::class, 'idEgresado', 'idEgresado');
    }

}
