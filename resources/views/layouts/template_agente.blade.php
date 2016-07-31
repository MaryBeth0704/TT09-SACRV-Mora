<!DOCTYPE html5>
<html>
<!--COMO TECNICA A LOS ARCHIVOS SCRIPT SE LOS COLOCA AL FINAL PARA QUE LA WEB SE CARGUE RÁPIDAMENTE-->
<head lang="es">
	<meta charset="UTF-8"/>
	<title>Registrar Salida</title>
	<!-- Con esto garantizamos que se vea bien en dispositivos móviles-->
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<!--Archivos importantes de BOOTSTRAP-->
	{!!Html::style('bootstrap/css/bootstrap.min.css')!!}
	{!!Html::style('css/template.css')!!}
</head>

<body>
	<header> 
		<div >
		 	<img id="imagen" src="{!!URL::to('/images/LOGO - copia.jpg')!!}" alt="Sistema del CRV">
		</div>
		
		<div id="logueo" class="form-group">
		    <label for="bienvenida">Bienvenid@</label>
		    <input type="text" class="form-control" id="user" value="Nombre del usuario que se logueo" disabled="">
	  	</div>	
	  	
		<div id="boton2" class="btn-group">	
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> 
			    Ir <span class="caret"></span>
			</button>
		 
			<ul class="dropdown-menu" role="menu">
			    <li><a href="#">Cambiar contraseña</a></li>
			    <li class="divider"></li>
			    <li><a href="#">Salir</a></li>
			</ul>
		</div>
	</header>

	<div  class="well">
        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#miMenu">
                <span class="sr-only"> Navigation</span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
              </button>
              <a class="navbar-brand" href="#"> <b> Menú </b></a>
            </div>
          
            <div class="collapse navbar-collapse" id="miMenu">
              <ul class="nav navbar-nav">
                <li class="active"> <button type="button" class="btn btn-default navbar-btn">Ingresar Vehículo</button> </li>
                <li> <button type="button" class="btn btn-default navbar-btn">Registrar Entrada</button> </li>
                <li> <button type="button" class="btn btn-default navbar-btn">Registrar Salida</button> </li>
                <li> <button type="button" class="btn btn-default navbar-btn">Bitácora de Ingresos</button> </li>
                <li> <button type="button" class="btn btn-default navbar-btn">Agregar Revisiones Permanencia</button> </li>
              </ul>
            </div>  
          </div>
        </nav>
	</div>

<!--ESTA PARTE ES LA QUE CAMBIA EN EL TEMPLATE-->
	@yield('content')


<!-- Este es el fin-->
	<footer>
		<img id="imagen2" src="{!!URL::to('/images/Municipio.png')!!}" alt="Ilustre Municipio de Loja">
		<a id="Pie" href="#">Unidad de tránsito</a>
		<a id="Pie" href="#">Ciudad</a>
		<a id="Pie" href="#">Municipio</a> 
		<p id="autoria"> María Betsabé Mora Medina <br> Proyecto de trabajo de Titulación <br> Universidad Nacional de Loja - CIS </p>
	</footer>

	<!--JS para el dropdown-->
	{!!Html::script('bootstrap/js/MIjquery.js')!!}
	{!!Html::script('bootstrap/js/MIbootstrap.js')!!}

	{!!Html::script('bootstrap/js/bootstrap.min.js')!!}
	{!!Html::script('bootstrap/jquery.js')!!}
</body>
</html>