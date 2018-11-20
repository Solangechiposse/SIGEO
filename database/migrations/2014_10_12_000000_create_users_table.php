<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->unique();
            $table->string('quarteirao');
            $table->string('bairro');
            $table->string('formacao');
            $table->string('rua');
            $table->date('data-de-nascimento');
            $table->date('data-de-inicio');
            $table->date ('data-de-reforma');
            $table->string('ocupacao');
            $table->string('genero');
            $table->integer('contacto')->unique();


            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
