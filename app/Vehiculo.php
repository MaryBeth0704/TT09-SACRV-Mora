<?php

namespace SACRV;

use Illuminate\Database\Eloquent\Model;
//php artisan make:model Vehiculo -m
class Vehiculo extends Model
{
    protected $table = "vehiculos";

    protected $fillable = [
        'numPlaca', 'numMotor', 'numChasis', 'servicio', 'clase',
    ];
}
