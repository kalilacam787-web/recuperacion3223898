<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Particular extends Model
{
    protected $table = 'particulars'; //nombre de la tabla en la base de datos
    protected $primaryKey = 'idParticular'; //nombre de la llave primaria en la tabla

    public function reservaParticulars()
    {
        // un particular gestiona varias reservas
        return $this->hasMany(ReservaParticular::class, 'idParticular', 'idParticular');
    }
}
