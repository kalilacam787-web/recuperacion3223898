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
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('idHotel'); //clave primaria autoincrementable
            $table->string('nombre', 100);
            $table->string('direccion', 100);
            $table->string('tfno', 20);
            $table->year('año');

            // relaciona cada hotel con una categoria
            $table->unsignedInteger('idCategoria')
                ->foreign('idCategoria')
                ->references('idCategoria')
                ->on('categorias')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
