<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriancasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criancas', function (Blueprint $table) {
            $table->increments('id');
           
            $table->string('nomeCrianca');
            $table->string('bday');
            $table->string('entradaDay');
            $table->string('nivel')->nullable();
            $table->string('proveniencia');
            $table->string('genero');
            $table->string('foto')->nullable();
            $table->string('nomeResponsavel');
     
            $table->string('bairro');
            $table->string('quarteirao')->nullable();
            $table->string('contactoResp');
            $table->string('nCasa')->nullable();
            $table->string('rua')->nullable();
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
        Schema::dropIfExists('criancas');
    }
}
