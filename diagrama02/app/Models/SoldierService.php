<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoldierService extends Model
{
    public function soldier(){

        // un registro pertenece a un soldado
        return $this->belongsTo(Soldier::class, 'idSoldier', 'idSoldier');
    }

    public function service(){

        // un registro pertenece a un servicio
        return $this->belongsTo(Service::class, 'idService', 'idService');
    }
}
