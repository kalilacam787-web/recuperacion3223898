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
        Schema::create('titulo_academico_egresados', function (Blueprint $table) {
            $table->increments('idTituloAcademicoEgresado'); //clave primaria autoincrementable

            // relaciona cada egresado con un titulo academico
            $table->unsignedInteger('idEgresado')
                ->foreign('idEgresado')
                ->references('idEgresado')
                ->on('egresados')
                ->onDelete('cascade');

            // relaciona el registro con un titulo academico
            $table->unsignedInteger('idTituloAcademico')
                ->foreign('idTituloAcademico')
                ->references('idTituloAcademico')
                ->on('titulos_academicos')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('titulo_academico_egresados');
    }
};
