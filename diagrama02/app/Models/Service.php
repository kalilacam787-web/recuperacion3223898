<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function soldierServices(){

        // un servicio puede estar asociado a varios soldados
        return $this->hasMany(SoldierService::class, 'idService', 'idService');
    }
}
