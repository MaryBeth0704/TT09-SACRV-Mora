<?php
//Este controlador es para la página principal (cuando el usuario se loguea)
namespace SACRV\Http\Controllers;

use Illuminate\Http\Request;

use SACRV\Http\Requests;

class Principal extends Controller
{
    public function index(){
    	return view('principal.index');
    }
//Solo es para probar si funciona, de ahí hay q definir el controlador para el administrador
    public function admin(){
    	return view('administrador.registrar_usuario');
    }
}