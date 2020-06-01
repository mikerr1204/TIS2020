<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MeritosDocumentos extends Migration
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

            $table->integer('convocatoria_id')->unsigned();
            $table->string('obligatorio');
            $table->string('detalles');
            $table->string('cabezal');
            $table->string('nivel');
            $table->string('subnivel');

            $table->timestamps();

            //relation
            $table->foreign('convocatoria_id')->references('id')->on('convocatorias')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::create('documentos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('convocatoria_id')->unsigned();
            $table->string('obligatorio');
            $table->string('detalles');

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
        Schema::dropIfExists('documentos');
        Schema::dropIfExists('meritos');
    }
}
