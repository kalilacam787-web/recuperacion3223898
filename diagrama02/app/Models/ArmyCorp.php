<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArmyCorp extends Model
{
    public function soldiers(){

        // un cuerpo militar tiene muchos soldados
        return $this->hasMany(Soldier::class, 'idArmyCorp', 'idArmyCorp');
    }

    
}
