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
        Schema::create('egresados', function (Blueprint $table) {
            $table->increments('idEgresado'); //clave primaria autoincrementable
            $table->string('nombre',45);
            $table->date('fechaNacimiento');
            $table->string('telefono',50);
            $table->string('direccion',150);
            $table->string('correo',60);
            $table->string('nombreLK',50);
            $table->string('nombreFB',50);
            $table->string('linkFB',80);
            $table->string('twitter',50);
            $table->year('fechaFinPregrado');
            $table->longText('modalidadGrado');

            // relaciona cada egresado con una ciudad
            $table->unsignedInteger('idCiudad')
                ->foreign('idCiudad')
                ->references('idCiudad')
                ->on('ciudads')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('egresados');
    }
};
