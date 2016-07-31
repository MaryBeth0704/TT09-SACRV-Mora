<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table -> string('ventoleras',4)->nullable();
            $table -> string('puertaTraseraIzq',4)->nullable();
            $table -> string('puertaTraseraDer',4)->nullable();
            $table -> string('parilla',4)->nullable();
            $table -> string('cenicero',4)->nullable();
            $table -> string('extintor',4)->nullable();
            $table -> string('capot',4)->nullable();
            $table -> string('adornosCapot',4)->nullable();
            $table -> string('mascarilla',4)->nullable();
            $table -> string('tapaGasolina',4)->nullable();
            $table -> string('retrovisorInternoExterno',4)->nullable();
            $table -> string('encendedor',4)->nullable();
            $table -> string('pito',4)->nullable();
            $table -> string('gata',4)->nullable();
            $table -> string('llaveDeRuedas',4)->nullable();
            $table -> string('herramientas',4)->nullable();
            $table -> string('volante',4)->nullable();
            $table -> string('tipoLicencia',10)->nullable();
            $table -> string('categoriaLicencia',10)->nullable();
            $table -> string('color',45)->nullable();
            $table -> string('articulosEncontrados')->nullable();
            $table -> string('radio',4)->nullable();

            $table->integer('vehiculo_id')->unsigned();
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('inventarios');
    }
}