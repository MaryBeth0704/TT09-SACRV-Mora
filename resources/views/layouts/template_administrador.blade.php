<!DOCTYPE html5>
<html>
<!--COMO TECNICA A LOS ARCHIVOS SCRIPT SE LOS COLOCA AL FINAL PARA QUE LA WEB SE CARGUE RÁPIDAMENTE-->
<head lang="es">
	<meta charset="UTF-8"/>
	<title> @section('title') Administrador @show</title>
	<!-- Con esto garantizamos que se vea bien en dispositivos móviles-->
	<meta name="viewport" content="width=device-width, initial-scale=1"> 



	<!--CSS y JavaScript propio del proyecto-->
	{!!Html::style('css/administrador.css')!!}
	{!!Html::style('css/template.css')!!}

	{!! Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
<!--    {!! Html::style('bower_components/bootstrap/dist/css/material.min.css') !!}-->
    {!! Html::style('bower_components/bootstrap/dist/css/bootstrap-material-design.min.css') !!}
    {!! Html::style('bower_components/bootstrap/dist/css/bootstrap-material-design.css') !!}
    {!! Html::style('bower_components/bootstrap-material-design/dist/css/ripples.min.css') !!}
    {!! Html::style('bower_components/bootstrap-material-design/dist/css/material-wfont.min.css') !!}

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
			<button type="button" class="btn btn-flat ripple-effect btn-default btn-sm dropdown-toggle" data-toggle="dropdown"> 
			    Ir <span class="caret"></span>
			</button>
		 
			<ul class="dropdown-menu" role="menu">
			    <li><a href="#">Cambiar contraseña</a></li>
			    <li class="divider"></li>
			    <li><a href="#">Salir</a></li>
			</ul>
		</div>
	</header>
<div>

	<div id="menuAdmin">
        <div class="row affix-row">
		    <div class="col-sm-3 col-md-2 affix-sidebar">
			    <div class="sidebar-nav">
					<div class="navbar navbar-default" role="navigation">
					    <div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<span class="visible-xs navbar-brand">Sidebar menu</span>
					    </div>

					    <div class="navbar-collapse collapse sidebar-navbar-collapse">
						      <ul class="nav navbar-nav" id="sidenav01">
							        <li class="active">
							        	<a href="#" data-toggle="collapse" data-target="#toggleDemo0" data-parent="#sidenav01" class="collapsed">
								          <center><h4> SACRV </h4></center>
							          	</a>
							        </li>

							        <li>
							          <a href="#" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed" >
							          <span class="glyphicon glyphicon-cog"></span> Parametrizar SACRV <span class="caret pull-right"></span>
							          </a>
							          <div class="collapse" id="toggleDemo" style="height: 0px;">
							            <ul class="nav nav-list">
							              <li><a href="#">Establecer costo grúa</a></li>
							              <li><a href="#">Establecer costo garage</a></li>
							            </ul>
							          </div>
							        </li>
							        <li class="active">
							          <a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
							          <span class="glyphicon glyphicon-inbox"></span> Administrar usuarios <span class="caret pull-right"></span>
							          </a>
							          <div class="collapse" id="toggleDemo2" style="height: 0px;">
							            <ul class="nav nav-list">
							              <li>
											    <a href="{!!URL::to('/usuario/create')!!}"><span class="glyphicon glyphicon-star"></span> Registrar Usuario</a>
							              </li>

							              <li>
							              		<a href="{!!URL::to('/usuario')!!}"><span class="glyphicon glyphicon-pencil"></span> Modificar Usuario</a>
<!--							              	{!!link_to_route('usuario.index', $title = 'Modificar usuario',  $attributes = ['class'=>'btn btn-primary']);!!}-->
							              </li>
							              <li>
							              		<a href="{!!URL::to('/usuario')!!}"><span class="glyphicon glyphicon-remove"></span> Dar baja Usuario</a>
							              </li>
							            </ul>
							          </div>
							        </li>
						      </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
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
	

	<!--CSS y JavaScript propio del proyecto-->
	{!!Html::script('js/opciones.js')!!}
	{!! Html::script('bower_components/jquery/dist/jquery.min.js') !!}
    {!! Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js') !!}
    {!! Html::script('bower_components/bootstrap-material-design/dist/js/ripples.min.js') !!}
    {!! Html::script('bower_components/bootstrap-material-design/dist/js/material.min.js') !!}
</body>
</html>