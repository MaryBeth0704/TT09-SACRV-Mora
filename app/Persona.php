<?php

namespace SACRV;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = "personas";

    protected $fillable = [
        'nombres', 'apellidos', 'cedula', 'direccion', 'cargo','email', 'horaEntrada','horaSalida',
    ];

    public function scopeCedula($consulta, $cedula){
    	$consulta->where('cedula', $cedula);
    }
}
