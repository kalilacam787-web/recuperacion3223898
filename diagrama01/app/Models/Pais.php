<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'pais'; //nombre de la tabla en la base de datos
    protected $primaryKey = 'idPais'; //nombre de la llave primaria en la tabla

    public function departamentos()
    {
        // un pais agrupa varios departamentos
        return $this->hasMany(Departamento::class, 'idPais', 'idPais');
    }
}
