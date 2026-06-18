<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmpresaEgresado extends Model
{
    protected $table = 'empresa_egresados'; //nombre de la tabla en la base de datos
    protected $primaryKey = 'idEmpresaEgresado'; //nombre de la llave primaria en la tabla

    public function egresado()
    {
        // relacion entre egresados y empresas
        return $this->belongsTo(Egresado::class, 'idEgresado', 'idEgresado');
    }

    public function empresa()
    {
        // relacion entre egresados y empresas
        return $this->belongsTo(Empresa::class, 'idEmpresa', 'idEmpresa');
    }
}
