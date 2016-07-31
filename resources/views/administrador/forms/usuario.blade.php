 <div class="row">
	<div class="form-group col-md-6">
	  {{ Form::label('nombresUser', 'Nombres:') }}
 {{ Form::text('nombres', null, array('placeholder' => 'Ingrese los nombres del usuario', 'maxlength' => '30', 'class' => 'form-control',)) }}
	</div>
	<div class="form-group col-md-6">
	  {{ Form::label('apellidosUser', 'Apellidos:') }}
	  {{ Form::text('apellidos', null, array('placeholder' => 'Ingrese los apellidos del usuario',  'maxlength' => '30','class' => 'form-control')) }}        
	</div>
</div>

<div class="row">
	<div class="form-group col-md-6">
	  {{Form::label('cedula', 'Cédula:')}}
	  {{ Form::text('cedula', null, array('placeholder' => 'Ingrese el número de cédula del usuario', 'maxlength' => '10', 'class' => 'form-control')) }}

	</div>
	<div class="form-group col-md-6">
	  {{ Form::label('direccionUser', 'Dirección:') }}
	  {{ Form::text('direccion', null, array('placeholder' => 'Ingrese la dirección domiciliaria del usuario', 'maxlength' => '100', 'class' => 'form-control')) }}        
	</div>
</div>

<div class="row">
	<div class="form-group col-md-6">
	  {{ Form::label('cargoUser', 'Cargo:') }}
	  {{ Form::text('cargo', null, array('placeholder' => 'Ingrese el cargo del usuario', 'maxlength' => '30', 'class' => 'form-control')) }}
	</div>
	<div class="form-group col-md-6">
	  {{ Form::label('email', 'Email:') }}
	  {{ Form::email('email', null, array('placeholder' => 'Ingrese el correo electrónico del usuario', 'maxlength' => '40','class' => 'form-control')) }}        
	</div>
</div>

<div class="row">
	<div class="form-group col-md-6">
	  {{ Form::label('rolUser', 'Rol:') }}	
	  {{ Form::select('nombre', array('administrador' => 'Administrador', 'unidadTransito' => 'Unidad de Tránsito' ,'agenteCRV'=>'Agente del CRV', 'encargadoCRV'=>'Encargado del CRV',) , 'agenteCRV' ) }}

	</div>
</div>

<div class="row">
	<div class="form-group col-md-6">
	  {{ Form::label('horaEntrada', 'Hora de entrada:') }}
	   <input type="time" name="horaEntrada"  min="00:00:00" max="23:59:59" step="1"  class="form-control">
	</div>
	<div class="form-group col-md-6">
	  {{ Form::label('horaSalida', 'Hora de salida:') }}
	  <input type="time" name="horaSalida"  min="00:00:00" max="23:59:59" step="1"  class="form-control">
	</div>
</div>

<div class="row">
	<div class="form-group col-md-6">
		{{Form::label('userName', 'Nombre de usuario:')}}
		{{ Form::text('userName', null, array('placeholder' => 'Ingrese el nick que utilizará el usuario', 'maxlength' => '20','class' => 'form-control')) }}
	</div>
</div>

<div class="row">
	<div class="form-group col-md-6">
		{{ Form::label('userPass', 'Contraseña') }}
		{{ Form::password('pass', array('class' => 'form-control', 'maxlength' => '20','placeholder'=>'Ingrese la contraseña del usuario')) }}
	</div>
	<div class="form-group col-md-6">
		{{ Form::label('userPass2', 'Confirmar contraseña') }}
		{{ Form::password('userPass2', array('class' => 'form-control', 'maxlength' => '20','placeholder'=>'Verifique la contraseña antes ingresada')) }}
	</div>
</div>