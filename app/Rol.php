<?php

namespace SACRV;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "rols";

    protected $fillable = [
        'nombre', 'descripcion', 
    ];
}