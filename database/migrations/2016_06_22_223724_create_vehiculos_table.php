<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//Para hacer la migracion       php artisan migrate
//Para deshacer la migracion    php artisan migrate:rollback

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table -> string('numPlaca',8)->unique();
            $table -> string('numMotor',45)->nullable();
            $table -> string('numChasis',45)->nullable();
            $table -> string('servicio',45)->default($value='Particular');
            $table -> string('clase',45)->default($value='Liviano');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vehiculos');
    }
}