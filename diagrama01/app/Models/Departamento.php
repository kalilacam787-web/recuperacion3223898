<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamentos'; //nombre de la tabla en la base de datos
    protected $primaryKey = 'idDepartamento'; //nombre de la llave primaria en la tabla

    public function pais()
    {
        // cada departamento pertenece a un pais
        return $this->belongsTo(Pais::class, 'idPais', 'idPais');
    }

    public function ciudades()
    {
        // un departamento agrupa varias ciudades
        return $this->hasMany(Ciudad::class, 'idDepartamento', 'idDepartamento');
    }
}
