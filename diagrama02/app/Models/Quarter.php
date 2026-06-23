<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quarter extends Model
{
    public function soldiers(){

        // un cuartel tiene muchos soldados
        return $this->hasMany(Soldier::class, 'idQuarter', 'idQuarter');
    }
}
