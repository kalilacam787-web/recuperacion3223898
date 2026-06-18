<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('area_conocimientos', function (Blueprint $table) {
            $table->increments('idAreaConocimiento'); //clave primaria autoincrementable
            $table->longText('nombreArea');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('area_conocimientos');
    }
};
