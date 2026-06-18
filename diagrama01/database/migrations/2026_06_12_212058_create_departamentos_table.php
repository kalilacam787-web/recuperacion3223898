<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->increments('idDepartamento'); //clave primaria autoincrementable
            $table->string('nombre',45);

            // relaciona cada departamento con un pais
            $table->unsignedInteger('idPais')
                ->foreign('idPais')
                ->references('idPais')
                ->on('pais')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('departamentos');
    }
};
