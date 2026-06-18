<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservaParticular extends Model
{
    protected $table = 'reserva_particulares'; //nombre de la tabla en la base de datos
    protected $primaryKey = 'idReservaParticular'; //nombre de la llave primaria en la tabla

    public function particular()
    {
        // cada reserva pertenece a un particular
        return $this->belongsTo(ReservaParticular::class, 'idParticular', 'idParticular');
    }

    public function habitacion()
    {
        // cada reserva pertenece a una habitacion
        return $this->belongsTo(Habitacion::class, 'idHabitacion', 'idHabitacion');
    }
}
