<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soldier extends Model
{
    public function armyCorp(){

        // un soldado pertenece a un cuerpo militar
        return $this->belongsTo(ArmyCorp::class, 'idArmyCorp', 'idArmyCorp');
    }

    public function quarter(){

        // un soldado pertenece a un cuartel
        return $this->belongsTo(Quarter::class, 'idQuarter', 'idQuarter');
    }

    public function company(){

        // un soldado pertenece a una compania
        return $this->belongsTo(Company::class, 'idCompany', 'idCompany');
    }

    public function soldierServices(){

        // un soldado puede prestar varios servicios
        return $this->hasMany(SoldierService::class, 'idSoldier', 'idSoldier');
    }
}
