<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservaParticularController extends Controller
{
    protected $table = 'reserva_particulares';
    protected $primaryKey = 'idReservaParticular';

    public function particular()
    {
        return $this->belongsTo(Particular::class, 'idParticular', 'idParticular');
        //una reserva a particular pertenece a un particular
    }

    public function habitacion()
    {
        return $this->belongsTo(Habitacion::class, 'idHabitacion', 'idHabitacion');
        //una reserva a particular pertenece a una habitacion
    }
}
