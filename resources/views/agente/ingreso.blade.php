@extends('layouts.principal')


@section('content')
	<section>
		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label for="numSerie" class="col-sm-9 control-label" style="color: blue; font-weight: bold;">N° SERIE</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="numSerie" placeholder="V000001">
				</div>
			</div>

			<div class="form-group">
				<label for="fecha" class="col-lg-1 control-label">Fecha</label>
				<div class="col-lg-2">
					<input type="date" class="form-control" id="fecha" >				
				</div>

				<label for="hora" class="col-lg-1 control-label">Hora</label>
				<div class="col-sm-1">
					<input type="time" class="form-control" id="hora">
				</div>

				<label for="motivoIngreso" class="col-lg-1 control-label">Motivo de Ingreso </label>
				<div class="col-lg-3">
					<input type="text" class="form-control" id="motivoIngreso" placeholder="Ingrese el motivo de retención">
				</div>

				<label for="autoridad" class="col-lg-1 control-label">Autoridad </label>
				<div class="col-lg-1">
					<select class="form-control">
					  <option>Juez</option>
					  <option>Fiscal</option>
					  <option>Coronel</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="resolucion" class="col-lg-1 control-label">Resolución </label>
				<div class="col-lg-2">
					<input type="text" class="form-control" id="resolucion" placeholder="Motivo de la autoridad">
				</div>

				<label for="autoridad" class="col-lg-1 control-label">Autoridad </label>
				<div class="col-lg-3">
					<input type="text" class="form-control" id="autoridad" placeholder="Ingrese el nombre de la autoridad">
				</div>

				<label for="oficio" class="col-lg-1 control-label">Oficio </label>
				<div class="col-lg-3">
					<input type="text" class="form-control" id="oficio" placeholder="Ingrese el número de oficio">
				</div>
			</div>

			<br>
			<p align="center" style="color: blue; font-weight: bold;">Datos del conductor </p>
			
			<div class="form-group">
				<label for="nombre" class="col-sm-1 control-label">Nombre </label>
				<div class="col-lg-3">
					<input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre del conductor">
				</div>

				<label for="cedula" class="col-sm-1 control-label">Cédula </label>
				<div class="col-lg-2">
					<input type="text" class="form-control" id="cedula" placeholder="Cédula del conductor">
				</div>

				<label for="pasaporte" class="col-sm-1 control-label">Pasaporte </label>
				<div class="col-lg-2">
					<input type="text" class="form-control" id="pasaporte" placeholder="Pasaporte del conductor">
				</div>
			</div>


			<br>
			<p align="center" style="color: blue; font-weight: bold;">Licencia </p>
			
			<div class="form-group">
				<label for="tipoLicencia" class="col-sm-1 control-label">Tipo </label>
				<div class="col-lg-3">
					<input type="text" class="form-control" id="tipoLicencia" placeholder="Ingrese el tipo de licencia">
				</div>

				<label for="categoria" class="col-sm-1 control-label">Categoría </label>
				<div class="col-lg-3">
					<input type="text" class="form-control" id="categoria" placeholder="Ingrese la categoría de la licencia">
				</div>
			</div>


			<br>
			<p align="center" style="color: blue; font-weight: bold;">Vehículo </p>
			
			<div class="form-group">
				<label for="placa" class="col-sm-1 control-label">Num. Placa </label>
				<div class="col-lg-2">
					<input type="text" class="form-control" id="placa" placeholder="Ingrese el Nºde placa">
				</div>

				<label for="tipoVehiculo" class="col-sm-1 control-label">Tipo </label>
				<div class="col-lg-2">
					<input type="text" class="form-control" id="tipoVehiculo" placeholder="Ingrese el tipo de vehículo">
				</div>

				<label for="marcaVehiculo" class="col-sm-1 control-label">Marca </label>
				<div class="col-lg-2">
					<input type="text" class="form-control" id="marcaVehiculo" placeholder="Marca del vehículo">
				</div>

				<label for="colorVehiculo" class="col-sm-1 control-label">Color </label>
				<div class="col-lg-2">
					<input type="text" class="form-control" id="colorVehiculo" placeholder="Color del vehículo">
				</div>
			</div>

			<div class="form-group">
				<label for="numChasis" class="col-sm-1 control-label">Nº Chasis </label>
				<div class="col-lg-2">
					<input type="text" class="form-control" id="numChasis" placeholder="Número de chasis">
				</div>

				<label for="numMotor" class="col-sm-1 control-label">Nº Motor </label>
				<div class="col-lg-2">
					<input type="text" class="form-control" id="numMotor" placeholder="Ingrese el número de motor">
				</div>

				<label for="servicio" class="col-sm-1 control-label">Servicio </label>
				<div class="col-lg-2">
					<select class="form-control">
					  <option>Particular</option>
					  <option>Público</option>
					  <option>Del Estado</option>
					</select>
				</div>

				<label for="claseVehiculo" class="col-sm-1 control-label">Clase </label>
				<div class="col-lg-2">
					<select class="form-control">
					  <option>Liviano</option>
					  <option>Pesado</option>
					  <option>Extra Pesado</option>
					  <option>Moto</option>
					</select>
				</div>
			</div>


			<br>
			<p align="center" style="color: blue; font-weight: bold;">Medio de Ingreso </p>
			<div class="form-group">
				<div class="col-lg-2">
					<select class="form-control">
					  <option>Personal</option>
					  <option>Grúa Institucional</option>
					  <option>Grúa Particular</option>
					</select>
				</div>

				<label for="empresa" class="col-sm-1 control-label">Empresa </label>
				<div class="col-lg-3">
					<input type="text" class="form-control" id="empresa" placeholder="Ingrese el nombre de la empresa-grúa">
				</div>

				<label for="datosTraslado" class="col-sm-2 control-label">Datos de traslado </label>
				<div class="col-lg-3">
					<input type="text" class="form-control" id="datosTraslado" placeholder="Ingrese el lugar de dónde se trae el vehículo">
				</div>
			</div>

			<hr>
			<p align="center" style="color: blue; font-weight: bold;">Inventario del vehículo al ingreso </p>
			<div class="form-group">
				<label for="observaciones" class="col-sm-1 control-label">Observaciones </label>
				<div class="col-lg-11">
					<textarea class="form-control" rows="2" id="observaciones" placeholder="Ingrese alguna observación o detalle del vehículo"></textarea>
				</div>
			</div>

<!--Inicio del formulario para el inventario-->
			<div class="form-group"> <!--Comienzo del fomulario de inventario frm-group -->
				
				<div id="formInvent1"> <!-- Inicio inventario 1-->
					<div class="col-lg-11">
						<font class="col-sm-6 control-label">Parabrisas delantero </font>
						<div class="radio-inline">
						  <label> <input type="radio" name="parabrisasDel" id="parabrisasDel_1" value="parabrisasDel_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline">
						  <label> <input type="radio" name="parabrisasDel" id="parabrisasDel_2" value="parabrisasDel_2"> Mal </label>
						</div>
						
						<div class="radio-inline">
						  <label><input type="radio" name="parabrisasDel" id="parabrisasDel_3" value="parabrisasDel_3"> No </label>
						</div> 
					</div> 

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">Parabrisas posterior </font>
						<div class="radio-inline">
						  <label> <input type="radio" name="parabrisasPos" id="parabrisasPos_1" value="parabrisasPos_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline">
						  <label> <input type="radio" name="parabrisasPos" id="parabrisasPos_2" value="parabrisasPos_2"> Mal </label>
						</div>
						
						<div class="radio-inline">
						  <label><input type="radio" name="parabrisasPos" id="parabrisasPos_3" value="parabrisasPos_3"> No </label>
						</div> 
					</div> 

					<div class="col-lg-11">
						<font class="col-sm-6 control-label"> Vidrio puerta delantera izq </font>
						<div class="radio-inline">
						  <label> <input type="radio" name="vidrPuertDelIzq" id="vidrPuertDelIzq_1" value="vidrPuertDelIzq_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline">
						  <label> <input type="radio" name="vidrPuertDelIzq" id="vidrPuertDelIzq_2" value="vidrPuertDelIzq_2"> Mal </label>
						</div>
						
						<div class="radio-inline">
						  <label><input type="radio" name="vidrPuertDelIzq" id="vidrPuertDelIzq_3" value="vidrPuertDelIzq_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label"> Vidrio puerta delantera der</font>
						<div class="radio-inline">
						  <label> <input type="radio" name="vidrPuertDelDer" id="vidrPuertDelDer_1" value="vidrPuertDelDer_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline">
						  <label> <input type="radio" name="vidrPuertDelDer" id="vidrPuertDelDer_2" value="vidrPuertDelDer_2"> Mal </label>
						</div>
						
						<div class="radio-inline">
						  <label><input type="radio" name="vidrPuertDelDer" id="vidrPuertDelDer_3" value="vidrPuertDelDer_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Vidrio puerta posterior izq</font>
						<div class="radio-inline">
						  <label> <input type="radio" name="vidrPuertPosIzq" id="vidrPuertPosIzq_1" value="vidrPuertPosIzq_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline">
						  <label> <input type="radio" name="vidrPuertPosIzq" id="vidrPuertPosIzq_2" value="vidrPuertPosIzq_2"> Mal </label>
						</div>
						
						<div class="radio-inline">
						  <label><input type="radio" name="vidrPuertPosIzq" id="vidrPuertPosIzq_3" value="vidrPuertPosIzq_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label"> Vidrio puerta posterior der</font>
						<div class="radio-inline">
						  <label> <input type="radio" name="vidrPuertPosDer" id="vidrPuertPosDer_1" value="vidrPuertPosDer_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline">
						  <label> <input type="radio" name="vidrPuertPosDer" id="vidrPuertPosDer_2" value="vidrPuertPosDer_2"> Mal </label>
						</div>
						
						<div class="radio-inline">
						  <label><input type="radio" name="vidrPuertPosDer" id="vidrPuertPosDer_3" value="vidrPuertPosDer_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Ventoleras  </font>
						<div class="radio-inline">
						  <label> <input type="radio" name="ventoleras" id="ventoleras_1" value="ventoleras_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline">
						  <label> <input type="radio" name="ventoleras" id="ventoleras_2" value="ventoleras_2"> Mal </label>
						</div>
						
						<div class="radio-inline">
						  <label><input type="radio" name="ventoleras" id="ventoleras_3" value="ventoleras_3"> No </label>
						</div> 
					</div>
					
					<div class="col-lg-11">
						<font class="col-sm-6 control-label"> Puerta delantera izq  </font>
						<div class="radio-inline">
						  <label> <input type="radio" name="puertaDelIzq" id="puertaDelIzq_1" value="puertaDelIzq_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline">
						  <label> <input type="radio" name="puertaDelIzq" id="puertaDelIzq_2" value="puertaDelIzq_2"> Mal </label>
						</div>
						
						<div class="radio-inline">
						  <label><input type="radio" name="puertaDelIzq" id="puertaDelIzq_3" value="puertaDelIzq_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label"> Puerta delantera der  </font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="puertaDelDer" id="puertaDelDer_1" value="puertaDelDer_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="puertaDelDer" id="puertaDelDer_2" value="puertaDelDer_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="puertaDelDer" id="puertaDelDer_3" value="puertaDelDer_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Puerta trasera izq   </font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="puertaTrasIzq" id="puertaTrasIzq_1" value="puertaTrasIzq_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="puertaTrasIzq" id="puertaTrasIzq_2" value="puertaTrasIzq_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="puertaTrasIzq" id="puertaTrasIzq_3" value="puertaTrasIzq_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Puerta trasera der   </font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="puertaTrasDer" id="puertaTrasDer_1" value="puertaTrasDer_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="puertaTrasDer" id="puertaTrasDer_2" value="puertaTrasDer_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="puertaTrasDer" id="puertaTrasDer_3" value="puertaTrasDer_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Puerta posterior (est) 	 </font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="puertPostEst" id="puertPostEst_1" value="puertPostEst_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="puertPostEst" id="puertPostEst_2" value="puertPostEst_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="puertPostEst" id="puertPostEst_3" value="puertPostEst_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Parrilla 	 </font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="parilla" id="parilla_1" value="parilla_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="parilla" id="parilla_2" value="parilla_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="parilla" id="parilla_3" value="parilla_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Cenicero 	 </font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="cenicero" id="cenicero_1" value="cenicero_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="cenicero" id="cenicero_2" value="cenicero_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="cenicero" id="cenicero_3" value="cenicero_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Extintor 	 </font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="extintor" id="extintor_1" value="extintor_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="extintor" id="extintor_2" value="extintor_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="extintor" id="extintor_3" value="extintor_3"> No </label>
						</div> 
					</div>
				
					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Plumas limpia vidrio del 	 </font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="plumasLimpiaVidDel" id="plumasLimpiaVidDel_1" value="plumasLimpiaVidDel_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="plumasLimpiaVidDel" id="plumasLimpiaVidDel_2" value="plumasLimpiaVidDel_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="plumasLimpiaVidDel" id="plumasLimpiaVidDel_3" value="plumasLimpiaVidDel_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Brazos limpia vidrio del 	 </font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="brazosLimpVidDel" id="brazosLimpVidDel_1" value="brazosLimpVidDel_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="brazosLimpVidDel" id="brazosLimpVidDel_2" value="brazosLimpVidDel_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="brazosLimpVidDel" id="brazosLimpVidDel_3" value="brazosLimpVidDel_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Pluma limpia vidrio post 	 </font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="plumasLimpiaVidPost" id="plumasLimpiaVidPost_1" value="plumasLimpiaVidPost_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="plumasLimpiaVidPost" id="plumasLimpiaVidPost_2" value="plumasLimpiaVidPost_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="plumasLimpiaVidPost" id="plumasLimpiaVidPost_3" value="plumasLimpiaVidPost_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Brazos limpia vidrio post 	 </font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="brazosLimpVidPost" id="brazosLimpVidPost_1" value="brazosLimpVidPost_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="brazosLimpVidPost" id="brazosLimpVidPost_2" value="brazosLimpVidPost_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="brazosLimpVidPost" id="brazosLimpVidPost_3" value="brazosLimpVidPost_3"> No </label>
						</div> 
					</div>
				</div> <!-- Fin inventario 1-->




				<div id="formInvent2"> <!-- Inicio inventario 2-->
					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Faro delantero izq	 </font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="faroDelIzq" id="faroDelIzq_1" value="faroDelIzq_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="faroDelIzq" id="faroDelIzq_2" value="faroDelIzq_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="faroDelIzq" id="faroDelIzq_3" value="faroDelIzq_3"> No </label>
						</div> 
					</div>


					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Faro delantero der	 </font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="faroDelDer" id="faroDelDer_1" value="faroDelDer_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="faroDelDer" id="faroDelDer_2" value="faroDelDer_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="faroDelDer" id="faroDelDer_3" value="faroDelDer_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Capot </font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="capot" id="capot_1" value="capot_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="capot" id="capot_2" value="capot_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="capot" id="capot_3" value="capot_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Adornos del capot </font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="adornosCapot" id="adornosCapot_1" value="adornosCapot_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="adornosCapot" id="adornosCapot_2" value="adornosCapot_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="adornosCapot" id="adornosCapot_3" value="adornosCapot_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Mascarilla</font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="mascarilla" id="mascarilla_1" value="mascarilla_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="mascarilla" id="mascarilla_2" value="mascarilla_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="mascarilla" id="mascarilla_3" value="mascarilla_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Parachoques del</font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="parachoquesDel" id="parachoquesDel_1" value="parachoquesDel_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="parachoquesDel" id="parachoquesDel_2" value="parachoquesDel_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="parachoquesDel" id="parachoquesDel_3" value="parachoquesDel_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Parachoques post</font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="parachoquesPost" id="parachoquesPost_1" value="parachoquesPost_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="parachoquesPost" id="parachoquesPost_2" value="parachoquesPost_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="parachoquesPost" id="parachoquesPost_3" value="parachoquesPost_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Tapa de gasolina</font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="tapaGasolina" id="tapaGasolina_1" value="tapaGasolina_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="tapaGasolina" id="tapaGasolina_2" value="tapaGasolina_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="tapaGasolina" id="tapaGasolina_3" value="tapaGasolina_3"> No </label>
						</div> 
					</div>
					
					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Retrovisor interno/externo</font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="retrovisorIntExt" id="retrovisorIntExt_1" value="retrovisorIntExt_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="retrovisorIntExt" id="retrovisorIntExt_2" value="retrovisorIntExt_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="retrovisorIntExt" id="retrovisorIntExt_3" value="retrovisorIntExt_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Encendedor</font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="encendedor" id="encendedor_1" value="encendedor_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="encendedor" id="encendedor_2" value="encendedor_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="encendedor" id="encendedor_3" value="encendedor_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Pito</font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="pito" id="pito_1" value="pito_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="pito" id="pito_2" value="pito_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="pito" id="pito_3" value="pito_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Gata</font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="gata" id="gata_1" value="gata_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="gata" id="gata_2" value="gata_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="gata" id="gata_3" value="gata_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Llave de ruedas</font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="llaveDeRuedas" id="llaveDeRuedas_1" value="llaveDeRuedas_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="llaveDeRuedas" id="llaveDeRuedas_2" value="llaveDeRuedas_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="llaveDeRuedas" id="llaveDeRuedas_3" value="llaveDeRuedas_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Herramientas</font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="herramientas" id="herramientas_1" value="herramientas_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="herramientas" id="herramientas_2" value="herramientas_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="herramientas" id="herramientas_3" value="herramientas_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Volante</font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="volante" id="volante_1" value="volante_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="volante" id="volante_2" value="volante_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="volante" id="volante_3" value="volante_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Luz posterior izq</font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="luzPostIzq" id="luzPostIzq_1" value="luzPostIzqe_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="luzPostIzq" id="luzPostIzq_2" value="luzPostIzqe_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="luzPostIzq" id="luzPostIzq_3" value="luzPostIzqe_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label">  Luz posterior der</font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="luzPostDer" id="luzPostDer_1" value="luzPostDer_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="luzPostDer" id="luzPostDer_2" value="luzPostDer_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="luzPostDer" id="luzPostDer_3" value="luzPostDer_3"> No </label>
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-6 control-label"> Radio</font>
						<div class="radio-inline">  
						  <label> <input type="radio" name="radioV" id="radioV_1" value="radioV_1" checked>  Bien  </label>
						</div>

						<div class="radio-inline"> 
						  <label> <input type="radio" name="radioV" id="radioV_2" value="radioV_2"> Mal </label>
						</div>
						
						<div class="radio-inline"> 
						  <label><input type="radio" name="radioV" id="radioV_3" value="radioV_3"> No </label>
						</div> 
					</div>
				</div> <!-- Inicio inventario 2-->




				<div id="formInvent3"> <!-- Inicio inventario 3-->
					<div class="col-lg-11">
						<font class="col-sm-7 control-label"> Faros halógenos (#)</font>	
						<div class="col-lg-2">
							<input type="text" class="form-control" id="farosHalogenos" placeholder="1">
						</div> 
					</div>

					<div class="col-lg-11">
						<font class="col-sm-7 control-label"> Moquetas de piso (#) </font>
						<div class="col-lg-2">
							<input type="text" class="form-control" id="moquetasPiso" placeholder="1">
						</div>
					</div>

					<div class="col-lg-11">
						<font class="col-sm-7 control-label"> Luz de salón (#) </font>
						<div class="col-lg-2">
							<input type="text" class="form-control" id="luzDeSalon" placeholder="1">
						</div>
					</div>

					<div class="col-lg-11">
						<font class="col-sm-7 control-label"> Parlantes unidades (#) </font>
						<div class="col-lg-2">
							<input type="text" class="form-control" id="parlantesUnidades" placeholder="1">
						</div>
					</div>

					<div class="col-lg-11">
						<font class="col-sm-7 control-label"> Manubrios exteriores (#) </font>
						<div class="col-lg-2">
							<input type="text" class="form-control" id="manubriosExteriores" placeholder="1">
						</div>
					</div>

					<div class="col-lg-11">
						<font class="col-sm-7 control-label"> Llantas delanteras (#) </font>
						<div class="col-lg-2">
							<input type="text" class="form-control" id="llantasDelanteras" placeholder="1">
						</div>
					</div>
						
					<div class="col-lg-11">
						<font class="col-sm-7 control-label"> Llantas traseras (#) </font>
						<div class="col-lg-2">
							<input type="text" class="form-control" id="llantasTraseras" placeholder="1">
						</div>
					</div>
					
					<div class="col-lg-11">
						<font class="col-sm-7 control-label"> Llanta de emergencia (#) </font>
						<div class="col-lg-2">
							<input type="text" class="form-control" id="llantasEmergencia" placeholder="1">
						</div>
					</div>		

					<div class="col-lg-11">
						<font class="col-sm-7 control-label"> Tapacubos (#) </font>
						<div class="col-lg-2">
							<input type="text" class="form-control" id="tapacubos" placeholder="1">
						</div>
					</div>			

					<div class="col-lg-11">
						<font class="col-sm-7 control-label"> Tapa lluvias (#) </font>
						<div class="col-lg-2">
							<input type="text" class="form-control" id="tapaLluvias" placeholder="1">
						</div>
					</div>	

					<div class="col-lg-11">
						<font class="col-sm-7 control-label"> Cinturón de seguridad (#) </font>
						<div class="col-lg-2">
							<input type="text" class="form-control" id="cinturonDeSeguridad" placeholder="1">
						</div>
					</div>	

					<div class="col-lg-11">
						<font class="col-sm-7 control-label"> Apoya cabezas (#) </font>
						<div class="col-lg-2">
							<input type="text" class="form-control" id="apoyaCabezass" placeholder="1">
						</div>
					</div>	

					<div class="col-lg-11">
						<font class="col-sm-7 control-label">Neblineros (#) </font>
						<div class="col-lg-2">
							<input type="text" class="form-control" id="neblineros" placeholder="1">
						</div>
					</div>	
				</div> <!-- Fin inventario 3-->
			</div>
<!--					<div class="form-group">
				
					</div>
-->
				<div class="form-group">
					<label for="artEncontradosVeh" class="col-sm-3 control-label">Artículos encontrados dentro del vehículo </label>
					<div class="col-lg-4">
						<textarea class="form-control" rows="4" id="artEncontradosVeh" placeholder="Se indica en lenguaje natural qué artículos han sido encontrados dentro del vehículo."></textarea>
					</div>

					<label for="fotosVideos" class="col-lg-1 control-label">Fotos/videos</label>
					<div class="col-lg-4">
						<input type="file" class="form-control" id="fotosVideos" >				
					</div>
				</div>

				<hr>
				<div class="form-group">
					<p align="center" style="color: blue; font-weight: bold;">Golpes / Raspones, Etc </p>
					
					<label for="describEstVeh" class="col-sm-3 control-label">Describa el estado del vehículo </label>
					<div class="col-lg-9">
						<textarea class="form-control" rows="2	" id="describEstVeh" placeholder="Se describe en lenguaje natural la(s) parte(s) afectada(s) del vehículo cuando llegó al CRV."></textarea>
					</div>
				</div>
<!--			</div>-->

			<hr>
			<p align="center" style="color: blue; font-weight: bold;">Responsables del ingreso del vehículo </p>
			
			<div id="CSSResp1" class="form-group">
				<p align="center" style="color: blue; font-weight: bold;">Agente que retiene el vehículo </p>

				<div class="col-lg-11">
					<label for="nombreAgenteRetiene" class="col-lg-3 control-label">Nombre </label>
					<div class="col-lg-9">
						<input type="text" class="form-control" id="nombreAgenteRetiene" placeholder="Nombre del agente de tránsito">
					</div>
				</div>

				<div class="col-lg-11">
					<label for="cedulaAgenteRetiene" class="col-lg-3 control-label">Cédula </label>
					<div class="col-lg-9">
						<input type="text" class="form-control" id="cedulaAgenteRetiene" placeholder="Cédula del agente de tránsito">
					</div>
				</div>
			</div>

			<div  id="CSSResp2" class="form-group">
				<p align="center" style="color: blue; font-weight: bold;">Depositario que ingresa el vehículo </p>

				<div class="col-lg-11">
					<label for="nombreDepIngresa" class="col-lg-3 control-label">Nombre </label>
					<div class="col-lg-9">
						<input type="text" class="form-control" id="nombreDepIngresa" placeholder="Nombre del agente del CRV">
					</div>
				</div>

				<div class="col-lg-11">
					<label for="cedulaDepIngresa" class="col-lg-3 control-label">Cédula </label>
					<div class="col-lg-9">
						<input type="text" class="form-control" id="cedulaDepIngresa" placeholder="Cédula del agente del CRV">
					</div>
				</div>
			</div>

			<div id="CSSResp3" class="form-group">
				<p align="center" style="color: blue; font-weight: bold;">Propietario/responsable vehículo </p>

				<div class="col-lg-11">
					<label for="nombrePropVeh" class="col-lg-3 control-label">Nombre </label>
					<div class="col-lg-9">
						<input type="text" class="form-control" id="nombrePropVeh" placeholder="Nombre del conductor del vehículo">
					</div>
				</div>

				<div class="col-lg-11">
					<label for="cedulaPropVeh" class="col-lg-3 control-label">Cédula </label>
					<div class="col-lg-9">
						<input type="text" class="form-control" id="cedulaPropVeh" placeholder="Cédula del conductor del vehículo">
					</div>
				</div>
			</div>


<!--	</div> Fin del fomulario de inventario frm-group -->

			<div class="form-group">
			</div>

			<div class="form-group">
				<div class="col-lg-offset-6 col-lg-16">
				<br>	
					<button type="submit" class="btn btn-danger">Enviar Ingreso</button>
				</div>
			</div>
		</form>		
	</section>

@stop