<?php

namespace SACRV\Http\Controllers;

use Illuminate\Http\Request;

use SACRV\Http\Requests;

class Agentes extends Controller
{
     public function index(){
    	//return view('agente.ingreso');
    	//return view('agente.agregar_revisiones_permanencia');
    	//return view('agente.registro_entrada');
    	return view('agente.registro_salida');
    }

     public function create(){
    	//return view('agente.ingreso.blade');
    	return "Holi2";
    }

     public function ingreso(){
    	//return view('agente.ingreso.blade');
    	return "Holi";
    }
}