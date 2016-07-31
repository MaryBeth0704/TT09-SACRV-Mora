<?php

namespace SACRV\Http\Requests;

use SACRV\Http\Requests\Request;
use Illuminate\Routing\Route;

class UserUpdateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function _construct(Route $route){
        $this->route= $route;
    }
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombres' => 'required',
            'apellidos' => 'required', 
            'cedula' => 'required|unique:personas,'.$this->route->getparameter('persona'),
//            http://www.cristalab.com/tutoriales/modulo-de-usuarios-vi-editar-un-registro-con-laravel-c111683l/
            'direccion'=> 'required',
            'cargo' => 'required',
            'email' => 'required|unique:personas|email,'.$this->route->getparameter('persona'),
            'nombre' => 'required|not_in:0', 
            'horaEntrada'=> 'required',
            'horaSalida' => 'required',
            'userName' => 'required|unique:cuentas|min:4|max:20,'.$this->route->getparameter('cuenta'),
            'pass' => 'required|min:4|max:20',
        ];
    }

    public function messages(){
        return [
            'nombre.not_in'=>'El campo Rol es obliogatorio.',
            'userName.required'=>'El campo nombre de usuario es obligatorio.',
            'userName.unique'=>'nombre de usuario ya ha sido registrado.',
            'pass.required'=>'El campo contraseña es obligatorio.',
            'pass.min'=>'contraseña debe contener al menos 4 caracteres.',
            'pass.max'=>'contraseña debe contener como máximo 20 caracteres.',
        ];
    }
}
