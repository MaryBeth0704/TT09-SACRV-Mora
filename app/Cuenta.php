<?php

namespace SACRV;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cuenta extends Model
{
	use SoftDeletes;
    protected $table = "cuentas";

    protected $fillable = [
        'userName', 'pass', 'persona_id', 'rol_id',
    ];

    public function sertPasswordAttribute($valor){
    	if(!empty($valor)){
    		$this->attributes['pass']=\Hash::make($valor);
    	}
    }

     protected $dates = ['deleted_at'];


     //para agregar una nueva columna a una base de datos ya creada. Hacemos en consola
     // php artisan make:migration add_deleted_to_personas_table --table=personas
}
