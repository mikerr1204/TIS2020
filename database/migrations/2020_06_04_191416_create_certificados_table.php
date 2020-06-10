<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('file', 128)->nullable();

            $table->integer('merito_id')->unsigned();
            $table->integer('postulation_id')->unsigned();
            $table->timestamps();

            //relation
            $table->foreign('merito_id')->references('id')->on('meritos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('postulation_id')->references('id')->on('postulations')
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
        Schema::dropIfExists('certificados');
    }
}
