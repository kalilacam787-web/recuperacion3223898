<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias'; //nombre de la tabla en la base de datos
    protected $primaryKey = 'idCategoria'; //nombre de la llave primaria en la tabla

    public function hotels()
    {
        // una categoria agrupa varios hoteles
        return $this->hasMany(Hotel::class, 'idCategoria', 'idCategoria');
    }
}
