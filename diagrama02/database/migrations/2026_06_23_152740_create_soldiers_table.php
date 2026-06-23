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
        Schema::create('soldiers', function (Blueprint $table) {
            $table->increments('idSoldier'); //clave primaria autoincrementable

            $table->string('nombre');
            $table->string('apellido');
            $table->string('grado');

            // relaciona cada soldado con un cuerpo de ejercito
            $table->unsignedBigInteger('idArmyCorp')
                ->foreign('idArmyCorp')
                ->references('idArmyCorp')
                ->on('army_corps');

            // relaciona cada soldado con un cuartel
            $table->unsignedBigInteger('idQuarter')
                ->foreign('idQuarter')
                ->references('idQuarter')
                ->on('quarters');

            // relaciona cada soldado con una compañia
            $table->unsignedBigInteger('idCompany')
                ->foreign('idCompany')
                ->references('idCompany')
                ->on('companies');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soldiers');
    }
};
