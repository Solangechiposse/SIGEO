<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcurasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procuras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('alcunha');
            $table->integer('idade');
            $table->string('escola')->nullable();
            $table->string('genero');
            $table->string('localDesaparecimento');
            $table->string('foto')->nullable();
            $table->string('data');
            $table->string('pai');
            $table->string('mae');
            $table->text('caracteristicas');
            $table->string('pessoaProcura');
            $table->string('trabalho')->nullable();
            $table->string('parentesco');
            $table->string('bairro')->nullable();
            $table->string('nCasa')->nullable();
            $table->string('contacto');
           
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
        Schema::dropIfExists('procuras');
    }
}
