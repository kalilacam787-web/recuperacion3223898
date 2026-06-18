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
        Schema::create('reserva_agencias', function (Blueprint $table) {
            $table->increments('idReservaAgencia'); //clave primaria autoincrementable
            $table->date('fechaIni');
            $table->date('fechaFin');

            // relaciona cada reserva con una agencia
            $table->unsignedInteger('idAgencia')
                ->foreign('idAgencia')
                ->references('idAgencia')
                ->on('agencias')
                ->onDelete('cascade');

            // relaciona cada reserva con una habitacion
            $table->unsignedInteger('idHabitacion')
                ->foreign('idHabitacion')
                ->references('idHabitacion')
                ->on('habitacions')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserva_agencias');
    }
};
