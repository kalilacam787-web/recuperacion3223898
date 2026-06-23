<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function soldiers(){

        // una compania tiene muchos soldados
        return $this->hasMany(Soldier::class, 'idCompany', 'idCompany');
    }
}
