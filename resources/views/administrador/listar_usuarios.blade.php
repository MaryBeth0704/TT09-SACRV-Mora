<?php $i=0?>
@extends('layouts.template_administrador')
@section('content')
	<section id="seccionAdmin">

		<span class="glyphicon glyphicon-menu-hamburger"></span> <font style="font-size: 20px; color: blue; ">Listado de usuarios</font> 
		<hr>

		@include('alerts.success')
		@if(count($cuentas)==0)
			<div class="alert alert-info">
			  <strong>Disculpe </strong> Usted por el momento no tiene usuarios registrados.
			</div>
		@else
			<table class="table">
			  <thead class="thead-inverse">
			    <tr>
			      <th>#</th>
			      <th>Nombres</th>
			      <th>Apellidos</th>
			      <th>Cédula</th>
			      <th>Dirección</th>
			      <th>Email</th>
			      <th>Rol</th>
			      <th>User Name</th>
			      <th>Acciones</th>
			    </tr>
			  </thead>

			  @foreach($cuentas as $cuenta)
			  <?php $person = \SACRV\Persona::find($cuenta->persona_id);?>
			  <?php $rol = \SACRV\Rol::find($cuenta->rol_id);?>
			  
			  <tbody>
			    <tr>
			      <th scope="row"> <?php echo $i+1 ?> </th>
			      <td>{{$person->nombres}} </td>
			      <td>{{$person->apellidos}} </td>
			      <td>{{$person->cedula}} </td>
			      <td>{{$person->direccion}} </td>
			      <td>{{$person->email}} </td>
			      
			      	@if($rol->nombre=='administrador')
			      		<td>Administrador </td>
			      	@elseif($rol->nombre=='encargadoCRV')
				  		<td>Encargado del CRV </td>
				  	@elseif($rol->nombre=='agenteCRV')
				  		<td>Agente del CRV </td>
				  	@elseif($rol->nombre=='unidadTransito')
				  		<td>Unidad de tránsito </td>
				  	@endif
		      	  <td>{{$cuenta->userName}} </td>
		      	  <td>
			      	{!!link_to_route('usuario.edit', $title = 'Modificar', $parameters = $cuenta->id, $attributes = ['class'=>'btn btn-primary']);!!}
			      </td>
			      <td>
			      	<a href="#" data-id="{{ $cuenta->id }}" class="btn btn-danger btn-delete"> Dar baja </a>
<!--			      	{!!link_to_route('usuario.destroy', $title = 'Dar baja', $parameters = $cuenta->id, $attributes = ['class'=>'btn btn-warning']);!!}-->
			      </td>
			    </tr>
			  </tbody>
			  <?php $i=$i+1?>
			  @endforeach
			</table>
		@endif

<!--Mostrar la paginacion-->
		{!!$cuentas->render()!!}
	</section>

<!-- MÉTODO OCULTO PARA ELIMINAR LA CUENTA CON AYUDA DE JAVASCRIPT-->		
@if(count($cuentas)!=0)
		{{ Form::open(array('route' => array('usuario.destroy', $cuenta->id), 'method' => 'DELETE', 'role' => 'form', 'id' => 'form-delete')) }}
		{!!Form::close()!!}
@endif

@stop