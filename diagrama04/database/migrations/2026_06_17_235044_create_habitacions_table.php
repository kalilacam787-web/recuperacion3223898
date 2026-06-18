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
        Schema::create('habitacions', function (Blueprint $table) {
            $table->increments('idHabitacion'); //clave primaria autoincrementable
            $table->string('tipo', 30);

            // relaciona cada habitacion con un hotel
            $table->unsignedInteger('idHotel')
                ->foreign('idHotel')
                ->references('idHotel')
                ->on('hotels')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitacions');
    }
};
