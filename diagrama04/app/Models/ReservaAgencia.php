<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservaAgencia extends Model
{
    protected $table = 'reserva_agencias'; //nombre de la tabla en la base de datos
    protected $primaryKey = 'idReservaAgencia'; //nombre de la llave primaria en la tabla

    public function agencia()
    {
        // cada reserva pertenece a una agencia
        return $this->belongsTo(Agencia::class, 'idAgencia', 'idAgencia');
    }

    public function habitacion()
    {
        // cada reserva pertenece a una habitacion
        return $this->belongsTo(Habitacion::class, 'idHabitacion', 'idHabitacion');
    }
}
