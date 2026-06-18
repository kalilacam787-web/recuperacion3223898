<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('titulo_academicos', function (Blueprint $table) {
            $table->increments('idTituloAcademico'); //clave primaria autoincrementable
            $table->longText('nombreTitulo');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('titulo_academicos');
    }
};
