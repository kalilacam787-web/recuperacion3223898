<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agencia extends Model
{
    protected $table = 'agencias'; //nombre de la tabla en la base de datos
    protected $primaryKey = 'idAgencia'; //nombre de la llave primaria en la tabla

    public function reservaAgencias()
    {
        // una agencia gestiona multiples reservas
        return $this->hasMany(ReservaAgencia::class, 'idAgencia', 'idAgencia');
    }
}
