<?php

namespace SACRV\Http\Controllers\Agente;

use Illuminate\Http\Request;

use SACRV\Http\Requests;
use SACRV\Http\Controllers\Controller;

class RevisionesPermanencia extends Controller
{
    public function index(){
    	return "estoy en el agente";
    }
    public function create(){
    	return view('agente.agregar_revisiones_permanencia.blade');
    }
}
