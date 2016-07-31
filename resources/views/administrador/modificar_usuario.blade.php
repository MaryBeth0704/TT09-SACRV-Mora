@extends('layouts.template_administrador')


@section('content')
	<section id="seccionAdmin">
		<span class="glyphicon glyphicon-user"></span> <font style="font-size: 25px; color: blue; ">  Modificar usuarios</font> 

		@include('alerts.request')
		
		{!!Form::model($usuario,  ['route'=>['usuario.update', $usuario->id], 'method'=>'PUT'])!!}
			@include('administrador.forms.usuario')

			<div class="form-group"> 
				<div class="col-lg-offset-4 col-lg-19">
					{{ Form::submit('Modificar usuario', array('type' => 'submit', 'class' => 'btn btn-primary')) }}
					</div>
			</div>
		{!!Form::close()!!}
	</section>
@stop