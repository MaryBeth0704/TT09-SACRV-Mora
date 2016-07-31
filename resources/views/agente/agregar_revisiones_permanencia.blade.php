@extends('layouts.template_agente')

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
				<label for="nombreQuienRevisa" class="col-lg-2 control-label">Nombre de quién realizó la revisión </label>
				<div class="col-lg-5">
					<input type="text" class="form-control" id="nombreQuienRevisa" placeholder="Nombre de la persona que llega a hacer alguna revisión al vehículo retenido." >
				</div>
			</div>


			<div class="form-group">
				<label for="detalleRevision" class="col-sm-2 control-label">Detalle de la revisión </label>
				<div class="col-lg-5">
					<textarea class="form-control" rows="5" id="detalleRevision" placeholder="Descripción de la tarea que hizo la persona encargada de la revisión."></textarea>
				</div>
			</div>

			<div class="form-group">
				<label for="subirFotos" class="col-sm-2 control-label">Subir foto(s) </label>
				<div class="col-lg-5">
					<input type="file" class="form-control" id="subirFotos" required >
				</div>
			</div>

			
			<div class="form-group">
				<div class="col-lg-offset-5 col-lg-16">
				<br><br>
					<button type="submit" class="btn btn-danger">Agregar Revisión</button>
				</div>
			</div>
		</form>	
		<br>	
	</section>

@stop