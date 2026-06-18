<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    protected $table = 'habitacions'; //nombre de la tabla en la base de datos
    protected $primaryKey = 'idHabitacion'; //nombre de la llave primaria en la tabla

    public function hotel()
    {
        // cada habitacion pertenece a un hotel
        return $this->belongsTo(Hotel::class, 'idHotel', 'idHotel');
    }

    public function reservaAgencias()
    {
        // una habitacion puede estar en reservas de agencias
        return $this->hasMany(ReservaAgencia::class, 'idHabitacion', 'idHabitacion');
    }

    public function reservaParticulars()
    {
        // una habitacion puede estar en reservas de particulares
        return $this->hasMany(ReservaParticular::class, 'idHabitacion', 'idHabitacion');
    }
}
