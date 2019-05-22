<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablaSecion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Secciones', function (Blueprint $table) {
            $table->increments('idSeccion');
            $table->string('tituloSeccion',255);
            $table->string('descripcionSeccion',255)->nullable();
            $table->integer('idSeccionPadre')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Secciones');
    }
}
