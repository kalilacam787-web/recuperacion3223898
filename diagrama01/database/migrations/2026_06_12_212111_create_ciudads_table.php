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
        Schema::create('ciudads', function (Blueprint $table) {
            $table->increments('idCiudad'); //clave primaria autoincrementable
            $table->string('nombre');

            // relaciona cada ciudad con un departamento
            $table->unsignedInteger('idDepartamento')
                ->foreign('idDepartamento')
                ->references('idDepartamento')
                ->on('departamentos')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ciudads');
    }
};
