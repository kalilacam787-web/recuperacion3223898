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
        Schema::create('area_conocimiento_egresados', function (Blueprint $table) {
            $table->increments('idAreaConocimientoEgresado'); //clave primaria autoincrementable

            // relaciona cada egresado con un area de conocimiento
            $table->unsignedInteger('idEgresado')
                ->foreign('idEgresado')
                ->references('idEgresado')
                ->on('egresados')
                ->onDelete('cascade');

            // relaciona el registro con un area de conocimiento
            $table->unsignedInteger('idAreaConocimiento')
                ->foreign('idAreaConocimiento')
                ->references('idAreaConocimiento')
                ->on('area_conocimientos')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('area_conocimiento_egresados');
    }
};
