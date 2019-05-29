<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_completo');
            $table->string('especialidad');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email');
            $table->string('cita');
            $table->integer('hora_id')->unsigned();            
            $table->foreign('hora_id')->references('id')->on('quotes');
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
        Schema::dropIfExists('doctors');
    }
}
