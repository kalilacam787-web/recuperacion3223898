<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas'; //nombre de la tabla en la base de datos
    protected $primaryKey = 'idEmpresa'; //nombre de la llave primaria en la tabla

    public function empresaEgresados()
    {
        // una empresa agrupa varios egresados
        return $this->hasMany(EmpresaEgresado::class, 'idEmpresa', 'idEmpresa');
    }
}
