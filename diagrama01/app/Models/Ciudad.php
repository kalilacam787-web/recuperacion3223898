<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudads'; //nombre de la tabla en la base de datos
    protected $primaryKey = 'idCiudad'; //nombre de la llave primaria en la tabla

    public function departamento()
    {
        // cada ciudad pertenece a un departamento
        return $this->belongsTo(Departamento::class, 'idDepartamento', 'idDepartamento');
    }

    public function egresados()
    {
        // una ciudad agrupa varios egresados
        return $this->hasMany(Egresado::class, 'idCiudad', 'idCiudad');
    }
}
