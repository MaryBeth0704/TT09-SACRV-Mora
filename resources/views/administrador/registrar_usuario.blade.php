@extends('layouts.template_administrador')

@section('content')
	<section id="seccionAdmin">
		<span class="glyphicon glyphicon-user"></span> <font style="font-size: 25px; color: blue; ">  Registrar nuevos usuarios</font> 
		<br>

		@include('alerts.request')
		{{ Form::open(array('route' => array('usuario.store'), 'method' => 'POST'), array('role' => 'form')) }}
			@include('administrador.forms.usuario')

			<div class="form-group"> 
				<div class="col-lg-offset-4 col-lg-19">
					{{ Form::submit('Registrar usuario', array('type' => 'submit', 'class' => 'btn btn-primary')) }}
					</div>
			</div>
		{{ Form::close() }} 
	</section>
@stop