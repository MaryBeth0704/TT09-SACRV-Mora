<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table -> string('userName',100)->nullable();
            $table -> string('pass',100)->nullable();

            $table->integer('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('personas');

            $table->integer('rol_id')->unsigned();
            $table->foreign('rol_id')->references('id')->on('rols');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cuentas');
    }
}
