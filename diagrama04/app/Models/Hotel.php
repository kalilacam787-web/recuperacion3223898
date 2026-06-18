<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels'; //nombre de la tabla en la base de datos
    protected $primaryKey = 'idHotel'; //nombre de la llave primaria en la tabla

    public function categoria()
    {
        // cada hotel pertenece a una categoria
        return $this->belongsTo(Categoria::class, 'idCategoria', 'idCategoria');
    }

    public function habitacions()
    {
        // un hotel agrupa varias habitaciones
        return $this->hasMany(Habitacion::class, 'idHotel', 'idHotel');
    }
}
