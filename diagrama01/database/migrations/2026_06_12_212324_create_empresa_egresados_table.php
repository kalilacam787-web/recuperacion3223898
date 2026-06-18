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
        Schema::create('empresa_egresados', function (Blueprint $table) {
            $table->increments('idEmpresaEgresado'); //clave primaria autoincrementable
            $table->string('esActual',5);

            // relaciona la participacion de un egresado en una empresa
            $table->unsignedInteger('idEgresado')
                ->foreign('idEgresado')
                ->references('idEgresado')
                ->on('egresados')
                ->onDelete('cascade');

            // relaciona la participacion de un egresado con un area de trabajo
            $table->unsignedInteger('idAreaEmpresa')
                ->foreign('idAreaEmpresa')
                ->references('idAreaEmpresa')
                ->on('area_empresas')
                ->onDelete('cascade');

            // relaciona el registro con una empresa
            $table->unsignedInteger('idEmpresa')
                ->foreign('idEmpresa')
                ->references('idEmpresa')
                ->on('empresas')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('empresa_egresados');
    }
};
