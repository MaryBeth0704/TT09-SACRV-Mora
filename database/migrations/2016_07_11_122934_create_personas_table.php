<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombres',100);
            $table->string('apellidos',100);
            $table->string('cedula',10)->unique();
            $table->string('direccion',100);
            $table->string('cargo',100)->nullable();
            $table->string('email')->unique();
            $table->time('horaEntrada');
            $table->time('horaSalida');

            //$table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('personas');
    }
}
