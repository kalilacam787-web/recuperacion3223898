<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TituloAcademico extends Model
{
    protected $table = 'titulo_academicos'; //nombre de la tabla en la base de datos
    protected $primaryKey = 'idTituloAcademico'; //nombre de la llave primaria en la tabla

    public function tituloAcademicoEgresados()
    {
        // un titulo academico agrupa varios egresados
        return $this->hasMany(TituloAcademicoEgresado::class, 'idTituloAcademico', 'idTituloAcademico');
    }
}
