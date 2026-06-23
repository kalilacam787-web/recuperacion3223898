<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('soldier_services', function (Blueprint $table) {
            $table->increments('idSoldierService'); //clave primaria autoincrementable

            // relaciona cada registro con un soldado
            $table->unsignedBigInteger('idSoldier')
                ->foreign('idSoldier')
                ->references('idSoldier')
                ->on('soldiers');

            // relaciona cada registro con un servicio
            $table->unsignedBigInteger('idService')
                ->foreign('idService')
                ->references('idService')
                ->on('services');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soldier_services');
    }
};
