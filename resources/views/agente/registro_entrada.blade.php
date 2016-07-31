@extends('layouts.principal')


@section('content')
	<section>
		<form class="form-horizontal" role="form">

			<div class="form-group">
				<label for="fecha" class="col-lg-2 control-label">Fecha</label>
				<div class="col-lg-2">
					<input type="date" class="form-control" id="fecha" >				
				</div>

				<label for="hora" class="col-lg-2 control-label">Hora</label>
				<div class="col-sm-1">
					<input type="time" class="form-control" id="hora">
				</div>
			</div>

			<div class="form-group">
				<label for="nombreAgente" class="col-lg-2 control-label">Nombre </label>
				<div class="col-lg-4">
					<input type="text" class="form-control" id="nombreAgente" placeholder="Claudio González" disabled>
				</div>
			</div>


			<div class="form-group">
				<label for="novedadesIng" class="col-sm-2 control-label">Novedades Ingreso </label>
				<div class="col-lg-8">
					<textarea class="form-control" rows="7" id="novedadesIng" placeholder="Al ingresar el agente custodio en turno indica el número de vehículos: motos, bicicletas, livianos, pesados y extra pesados, con los que recibe el turno (los que tiene en el momento de su turno); a más se escriben artículos que encuentren a su responsabilidad como: Motorola base, Motorola móvil, Cámara, Cable USB, etc."></textarea>
				</div>
			</div>

			
			<div class="form-group">
				<div class="col-lg-offset-5 col-lg-16">
				<br><br>
					<button type="submit" class="btn btn-danger">Registrar Entrada</button>
				</div>
			</div>
			<br>
		</form>		
	</section>

@stop