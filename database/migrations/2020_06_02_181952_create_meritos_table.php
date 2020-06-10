<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meritos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->string('clase');
            $table->string('detalle');
            $table->string('puntos');
            $table->string('importancia');

            $table->integer('convocatoria_id')->unsigned();

            $table->timestamps();

            //relation
            $table->foreign('convocatoria_id')->references('id')->on('convocatorias')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meritos');
    }
}
