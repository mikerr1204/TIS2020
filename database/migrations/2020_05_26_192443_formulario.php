<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Formulario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario', function (Blueprint $table) {
            $table->increments('id');

            // $table->integer('formulario_id')->unsigned();
            $table->string('nombre')->unsigned();
            $table->string('carrera')->unsigned();
            $table->string('documentos')->unsigned();
            $table->string('requisitos')->unsigned();
            $table->string('menciones')->unsigned();

            $table->timestamps();

            //relation
            // $table->foreign('convocatoria_id')->references('id')->on('convocatorias')
            // ->onDelete('cascade')
            // ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
