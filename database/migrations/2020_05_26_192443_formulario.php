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
            $table->string('nombre');
            $table->string('carrera');
            $table->string('documentos');
            $table->string('requisitos');
            $table->string('menciones');
            $table->foreign('convocatoria_id')->references('id')->on('convocatorias')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
