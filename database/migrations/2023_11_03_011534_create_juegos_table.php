<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juegos', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha');
            $table->bigInteger('id_horario');
            $table->bigInteger('id_equipo1');
            $table->bigInteger('id_equipo2');
            $table->Integer('goles_equipo1');
            $table->Integer('goles_equipo2');
            $table->Integer('equipo_ganador');
            $table->bigInteger('id_estadio');
            $table->bigInteger('id_grupo');
            $table->bigInteger('id_fase');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juegos');
    }
};
