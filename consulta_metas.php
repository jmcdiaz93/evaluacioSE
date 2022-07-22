	<?php
 	session_start();
	require 'conexion.php';

	if (!isset($_SESSION["id_usuario"])) {
		header("Location:index.php");

	}


	$idusuario = $_POST['id_evaluado'];

	
	$sql = "SELECT * FROM usuarios  

	WHERE id_usuario='$idusuario' ";



	$result = $mysqli->query($sql);

	$row = $result->fetch_assoc();



	?>


	<!DOCTYPE html>
		<!DOCTYPE html>
		<html>
			  <head>
			    <meta charset="utf-8">
			    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			    <meta name="description" content="">
			    <meta name="generator" content="Jekyll v4.1.1">
			    <title>Evaluación de Desempeño</title>

			  

			    <!-- Bootstrap core CSS -->
			  <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">
			   

			    <!-- Custom styles for this template -->
			    <br>

			    <div class="col-xs-1"></div>

			    <img  src="imagenes/logoeconomia.jpg">
 
 		   </head>
		  	<body>
		    <div class="container">

 					
		   		<br>
		   		 <header>
		    
		    		 <center><h3>Evaluación de Metas</h3></center>
		    
		   		 </header>
		   		  <hr class="red">
		   		 <br>
		        	

		        	<table  class="table table-striped">
		 
						 <tbody>
						    <tr>
						      <th scope="row">Nombre</th>
						      <td ><?php  echo ($row['nombre']); ?> <?php  echo ($row['apellido_paterno']); ?> <?php  echo ($row['apellido_materno']); ?>
						      </td>
						      <td><b>RFC:    </b><?php echo ($row['usuario']); ?></td>
						      
						    </tr>
						    <tr>
						      <th scope="row">Puesto</th>
						      <td><?php  header("Content-Type: text/html;charset=utf-8"); echo ($row['puesto']); ?></td>
						      <td><b>UR:    </b><?php echo ($row['ur']); ?></td>
						    </tr>
						    <tr>
						      <th scope="row">Nivel</th>
						      <td><?php echo ($row['nivel']); ?></td>
						      <td><b>CURP:    </b><?php echo ($row['curp']); ?></td>
						    </tr>

						    
						  </tbody>
						</table>



				 
				 <hr class="featurette-divider">
			
				 <center><h5>Funciones</h5></center>

				  <hr class="red">
				 	   <?php
 	
						require 'conexion.php';
					   

					   $idusuario = $_POST['id_evaluado'];

		
						$sql = "SELECT * FROM metas  

						WHERE id_usuario='$idusuario' AND anio='2021' ";



						$result = $mysqli->query($sql);

						$row = $result->fetch_assoc();
						$fechareg = date("d/m/y");
						
						


						?>



				 


				 	<table class="table table-striped">
						  <thead>
						    <tr>
								<?php  echo( $fechareg);?>
						      <th align="center" scope="col">No.</th>
						      <th align="center" scope="col">Funcion</th>
						     
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">1</th>
						      <td><input type="text" class="form-control" id="disabledTextInput" class="form-control" placeholder= "<?php  echo ($row['funcion1']); ?>"> </td>
						      
						    </tr>
						    <tr>
						      <th scope="row">2</th>
						      <td><input type="text" class="form-control" id="disabledTextInput" class="form-control" placeholder= "<?php  echo ($row['funcion2']); ?>"> </td>
						      
						    </tr>
						    <tr>
						      <th scope="row">3</th>
						      <td><input type="text" class="form-control" id="disabledTextInput" class="form-control" placeholder= "<?php  echo ($row['funcion3']); ?>"> </td>
						      
						    </tr>

						    <tr>
						      <th scope="row">4</th>
						      <td><input type="text" class="form-control" id="disabledTextInput" class="form-control" placeholder= "<?php  echo ($row['funcion4']); ?>"> </td>
						      
						    </tr>

						     <tr>
						      <th scope="row">5</th>
						      <td><input type="text" class="form-control" id="disabledTextInput" class="form-control" placeholder= "<?php  echo ($row['funcion5']); ?>"> </td>
						      
						    </tr>

						     <tr>
						      <th scope="row">6</th>
						      <td><input type="text" class="form-control" id="disabledTextInput" class="form-control" placeholder= "<?php  echo ($row['funcion6']); ?>"> </td>
						      
						    </tr>

						     <tr>
						      <th scope="row">7</th>
						      <td><input type="text" class="form-control" id="disabledTextInput" class="form-control" placeholder= "<?php  echo ($row['funcion7']); ?>"> </td>
						      
						    </tr>
						  </tbody>
						</table>

				 <br>
				
				 <br>

				  

				 <hr class="red">
				  <center><h5>Meta 1
				  </h5></center>
				  	<form action="registraeva.php?id=<?php echo $row['id_usuario'];?>  " method="POST"> 
				<table class="table table-striped">

						  <tbody>
						    <tr>
						      
						      <td><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled><?php  echo ($row['meta1']); ?></textarea> </td>
						      
						    </tr>


						    <table class="table table-bordered table-dark ">
								
								  <tbody>
								    <tr>
								      

								      <td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m1a" id="m1a1" value="8.5" required>
 												 <label class="form-check-label" for="exampleRadios1">
  														(8.5)Sobresaliente
											     </label>
										</div>
		
									  </td>

										<td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m1a" id="m1a2" value="7.0"required>
 												 <label class="form-check-label" for="exampleRadios1">
  														  (7)Bueno
											     </label>
										</div>
		
									  </td>

									  <td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m1a" id="m1a3" value="6.0"required>
 												 <label class="form-check-label" for="exampleRadios1">
  														(6)Regular
											     </label>
										</div>
		
									  </td>

									  <td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m1a" id="m1a4" value="0.0" required>
 												 <label class="form-check-label" for="exampleRadios1">
  														  (0)Deficiente
											     </label>
										</div>
		
									  </td>

									
								      
								    </tr>
								   
								  </tbody>
								</table>


									 <table class="table table-bordered  ">
								
								  <tbody>
								    <tr>
								      

								      <td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m1b" id="m1b1" value="4.0"required>
 												 <label class="form-check-label" for="x1">
  														  (4)Antes del plazo
											     </label>
										</div>
		
									  </td>

										<td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m1b" id="m1b2" value="3.5" required>
 												 <label class="form-check-label" for="x1">
  														 (3.5)En el plazo
											     </label>
										</div>
		
									  </td>

									  <td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m1b" id="m1b3" value="3.0" required>
 												 <label class="form-check-label" for="x1">
  														  (3)Despues del plazo
											     </label>
										</div>
		
									  </td>

									  

									
								      
								    </tr>
								   
								  </tbody>
								</table>


						   
						   



						     </tbody>
						</table>
						
						

						<!-- Meta2 -->

						<hr class="red">
				        <center><h5>Meta 2
				  		</h5></center>

						<table class="table table-striped">

						  <tbody>
						    <tr>
						      
						      <td><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"disabled><?php  echo ($row['meta2']); ?></textarea> </td>
						      
						    </tr>


						    <table class="table table-bordered table-dark ">
								
								  <tbody>
								    <tr>
								      

								      <td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m2a" id="m2a1" value="8.5"required>
 												 <label class="form-check-label" for="exampleRadios1">
  														(8.5)Sobresaliente
											     </label>
										</div>
		
									  </td>

										<td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m2a" id="m2a2" value="7.0" required>
 												 <label class="form-check-label" for="exampleRadios1">
  														  (7)Bueno
											     </label>
										</div>
		
									  </td>

									  <td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m2a" id="m2a3" value="6.0"required>
 												 <label class="form-check-label" for="exampleRadios1">
  														 (6) Regular
											     </label>
										</div>
		
									  </td>

									  <td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m2a" id="m2a4" value="0.0"required>
 												 <label class="form-check-label" for="exampleRadios1">
  														  (0)Deficiente
											     </label>
										</div>
		
									  </td>

									
								      
								    </tr>
								   
								  </tbody>
								</table>


									 <table class="table table-bordered  ">
								
								  <tbody>
								    <tr>
								      

								      <td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m2b" id="m2b1" value="4.0"required>
 												 <label class="form-check-label" for="x1">
  														 (4)Antes del plazo
											     </label>
										</div>
		
									  </td>

										<td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m2b" id="m2b2" value="3.5"required>
 												 <label class="form-check-label" for="x1">
  														(3.5)En el plazo
											     </label>
										</div>
		
									  </td>

									  <td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m2b" id="m2b3" value="3.0"required>
 												 <label class="form-check-label" for="x1">
  														  (3)Despues del plazo
											     </label>
										</div>
		
									  </td>

									  
									
								      
								    </tr>
								   
								  </tbody>
								</table>


						   
						   



						     </tbody>
						</table>
						
					

						<!-- Meta3 -->

						<hr class="red">
				        <center><h5>Meta 3
				  		</h5></center>

						<table class="table table-striped">

						  <tbody>
						    <tr>
						      
						      <td><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled><?php  echo ($row['meta3']); ?></textarea> </td>
						      
						    </tr>


						    <table class="table table-bordered table-dark ">
								
								  <tbody>
								    <tr>
								      

								      <td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m3a" id="m3a1" value="8.5"required>
 												 <label class="form-check-label" for="exampleRadios1">
  														 (8.5)Sobresaliente
											     </label>
										</div>
		
									  </td>

										<td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m3a" id="m3a2" value="7.0"required>
 												 <label class="form-check-label" for="exampleRadios1">
  														 (7)Bueno
											     </label>
										</div>
		
									  </td>

									  <td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m3a" id="m3a3" value="6.0"required>
 												 <label class="form-check-label" for="exampleRadios1">
  														  (6)Regular
											     </label>
										</div>
		
									  </td>

									  <td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m3a" id="m3a4" value="0.0"required>
 												 <label class="form-check-label" for="exampleRadios1">
  														  (0)Deficiente
											     </label>
										</div>
		
									  </td>

									
								      
								    </tr>
								   
								  </tbody>
								</table>


									 <table class="table table-bordered  ">
								
								  <tbody>
								    <tr>
								      

								      <td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m3b" id="m3b1" value="4.0"required>
 												 <label class="form-check-label" for="x1">
  														  (4)Antes del plazo
											     </label>
										</div>
		
									  </td>

										<td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m3b" id="m3b2" value="3.5"required>
 												 <label class="form-check-label" for="x1">
  														  (3.5)En el plazo
											     </label>
										</div>
		
									  </td>

									  <td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m3b" id="m3b3" value="3.0"required>
 												 <label class="form-check-label" for="x1">
  														  (3)Despues del plazo
											     </label>
										</div>
		
									  </td>

									  

									
								      
								    </tr>
								   
								  </tbody>
								</table>


						   
						   



						     </tbody>
						</table>
						
						
						<!-- Meta 4 -->

						<hr class="red">
				        <center><h5>Meta 4
				  		</h5></center>

						<table class="table table-striped">

						  <tbody>
						    <tr>
						      
						      <td><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled><?php  echo ($row['meta4']); ?></textarea> </td>
						      
						    </tr>


						    <table class="table table-bordered table-dark ">
								
								  <tbody>
								    <tr>
								      

								      <td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m4a" id="m4a1" value="8.5"required>
 												 <label class="form-check-label" for="exampleRadios1">
  														  (8.5)Sobresaliente
											     </label>
										</div>
		
									  </td>

										<td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m4a" id="m4a2" value="7.0"required>
 												 <label class="form-check-label" for="exampleRadios1">
  														  (7)Bueno
											     </label>
										</div>
		
									  </td>

									  <td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m4a" id="m4a3" value="6.0"required>
 												 <label class="form-check-label" for="exampleRadios1">
  														  (6)Regular
											     </label>
										</div>
		
									  </td>

									  <td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m4a" id="m4a4" value="0.0"required>
 												 <label class="form-check-label" for="exampleRadios1">
  														  (0)Deficiente
											     </label>
										</div>
		
									  </td>

									
								      
								    </tr>
								   
								  </tbody>
								</table>


									 <table class="table table-bordered  ">
								
								  <tbody>
								    <tr>
								      

								      <td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m4b" id="m4b1" value="4.0"required>
 												 <label class="form-check-label" for="x1">
  														  (4)Antes del plazo
											     </label>
										</div>
		
									  </td>

										<td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m4b" id="m4b2" value="3.5"required>
 												 <label class="form-check-label" for="x1">
  														  (3.5)En el plazo
											     </label>
										</div>
		
									  </td>

									  <td> 
										  
			  							<div class="form-check">
 										 <input class="form-check-input" type="radio" name="m4b" id="m4b3" value="3.0"required>
 												 <label class="form-check-label" for="x1">
  														  (3)Despues del plazo
											     </label>
										</div>
		
									  </td>

									
									
								      
								    </tr>
								   
								  </tbody>
								</table>


						   
						   



						     </tbody>
						</table>
				<br>
				<br>
				  <center><h4>Evaluación de Factores
				  </h4></center>
				  <hr class="red">
				 <br>
				  <!-- Factor1 -->
				 <table class="table table-bordered">
						  
						  <tbody>
						    <tr>
						     <center> <th rowspan="2" scope="row">	CONOCIMIENTO DEL PUESTO</th></center>
						      <td>POSEE MUY AMPLIO CONOCIMIENTO DEL PUESTO QUE TIENE ASIGNADO, LO QUE LE PERMITE PRESTAR LOS SERVICIOS QUE TIENE ENCOMENDADOS CON MAYOR OPORTUNIDAD Y CALIDAD DE LAS REQUERIDAS.
						      </td>
						      
						      	<td>
						      		POSEE BUEN CONOCIMIENTO DEL PUESTO QUE TIENE ASIGNADO, LO QUE LE PERMITE PRESTAR LOS SERVICIOS QUE TIENE ENCOMENDADOS CON BUENA OPORTUNIDAD Y CALIDAD.
						      	</td>

						      	<td>
						      		POSEE CONOCIMIENTO ELEMENTAL DEL PUESTO QUE TIENE ASIGNADO, LO QUE PROVOCA, EN LA PRESTACIÓN DE LOS SERVICIOS QUE TIENE ENCOMENDADOS REGULAR OPORTUNIDAD Y CALIDAD.
						      	</td>

						      	<td>
						      		POSEE POCO CONOCIMIENTO DEL PUESTO QUE TIENE ASIGNADO, LO QUE LE IMPIDE CUMPLIR CON LA OPORTUNIDAD Y CALIDAD ESTABLECIDA PARA LA PRESTACIÓN DE LOS SERVICIOS QUE TIENE ENCOMENDADOS.
						      	</td>



						    </tr>

						    	<tr>	


						    	

						    	<td>	
						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="conocimiento" id="conocimiento1" value="4"required>
 												 <label class="form-check-label" for="x1">
  														(4)Sobresaliente
											     </label>
										</div>
						    	</td>


						    	<td>	

						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="conocimiento" id="conocimiento2" value="3"required>
 												 <label class="form-check-label" for="x1">
  														 (3)Bueno
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="conocimiento" id="conocimiento3" value="2"required>
 												 <label class="form-check-label" for="x1">
  														 (2)Regular
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="conocimiento" id="conocimiento4" value="1"required>
 												 <label class="form-check-label" for="x1">
  														 (1)Deficiente
											     </label>
										</div>

						    	</td>








						    	</tr>







						    
						  </tbody>
						</table>
						<br>


					<!-- Factor2 -->
					 <table class="table table-bordered">
						  
						  <tbody>
						    <tr>
						     <center> <th rowspan="2" scope="row">CRITERIO</th></center>
						      <td>	
								PROPONE SOLUCIONES ÓPTIMAS A LOS PROBLEMAS DE TRABAJO QUE SE LE PRESENTAN.
						      </td>
						      
						      	<td>
						      		PROPONE SOLUCIONES ADECUADAS A LOS PROBLEMAS DE TRABAJO QUE SE LE PRESENTAN.
						      	</td>

						      	<td>
						      		PROPONE SOLUCIONES ACEPTABLES A LOS PROBLEMAS DE TRABAJO QUE SE LE PRESENTAN.
						      	</td>

						      	<td>
						      		PROPONE SOLUCIONES POCO RELEVANTES A LOS PROBLEMAS DE TRABAJO QUE SE LE PRESENTAN.
						      	</td>



						    </tr>

						    	<tr>	


						    	

						    	<td>	
						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="criterio" id="criterio1" value="4"required>
 												 <label class="form-check-label" for="x1">
  														 (4)Sobresaliente
											     </label>
										</div>
						    	</td>


						    	<td>	

						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="criterio" id="criterio2" value="3"required>
 												 <label class="form-check-label" for="x1">
  														 (3)Bueno
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="criterio" id="criterio3" value="2"required>
 												 <label class="form-check-label" for="x1">
  														 (2)Regular
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="criterio" id="criterio4" value="1"required>
 												 <label class="form-check-label" for="x1">
  														 (1)Deficiente
											     </label>
										</div>

						    	</td>

						    	</tr>

						    
						  </tbody>
						</table>
						<br>


					<!-- Factor3 -->
					 <table class="table table-bordered">
						  
						  <tbody>
						    <tr>
						     <center> <th rowspan="2" scope="row">CALIDAD DEL TRABAJO</th></center>
						      <td>	
								 REALIZA TRABAJOS EXCELENTES SIN COMETER ERRORES EN SU CONFIABILIDAD, EXACTITUD Y PRESENTACIÓN.
						      </td>
						      
						      	<td>
						      		REALIZA BUENOS TRABAJOS Y EXCEPCIONALMENTE COMETE ERRORES EN SU CONFIABILIDAD, EXACTITUD Y PRESENTACIÓN.
						      	</td>

						      	<td>
						      		REALIZA TRABAJOS REGULARES CON ALGUNOS ERRORES EN SU CONFIABILIDAD, EXACTITUD Y PRESENTACIÓN.
						      	</td>

						      	<td>
						      		REALIZA TRABAJOS CON ALTO ÍNDICE DE ERRORES EN SU CONFIABILIDAD, EXACTITUD Y PRESENTACIÓN.
						      	</td>



						    </tr>

						    	<tr>	


						    	

						    	<td>	
						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="calidad_trabajo" id="calidad1" value="5"required>
 												 <label class="form-check-label" for="x1">
  														 (5)Sobresaliente
											     </label>
										</div>
						    	</td>


						    	<td>	

						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="calidad_trabajo" id="calidad2" value="4"required>
 												 <label class="form-check-label" for="x1">
  														 (4)Bueno
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="calidad_trabajo" id="calidad3" value="3"required>
 												 <label class="form-check-label" for="x1">
  														 (3)Regular
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="calidad_trabajo" id="calidad4" value="2"required>
 												 <label class="form-check-label" for="x1">
  														 (2)Deficiente
											     </label>
										</div>

						    	</td>

						    	</tr>

						    
						  </tbody>
						</table>
						<br>


					<!-- Factor4 -->
					 <table class="table table-bordered">
						  
						  <tbody>
						    <tr>
						     <center> <th rowspan="2" scope="row">TÉCNICA Y ORGANIZACIÓN DEL TRABAJO</th></center>
						      <td>	
								 APLICA DE MODO SOBRESALIENTE Y EN TODO MOMENTO LAS TÉCNICAS Y PROCEDIMIENTOS ESTABLECIDOS PARA EL DESARROLLO DE SU TRABAJO.
						      </td>
						      
						      	<td>
						      		APLICA DE MODO ADECUADO LAS TÉCNICAS Y PROCEDIMIENTOS ESTABLECIDOS PARA EL DESARROLLO DE SU TRABAJO.
						      	</td>

						      	<td>
						      		APLICA OCASIONALMENTE LAS TÉCNICAS Y PROCEDIMIENTOS ESTABLECIDOS PARA EL DESARROLLO DE SU TRABAJO.
						      	</td>

						      	<td>
						      		APLICA EN GRADO MÍNIMO O NULO LAS TÉCNICAS Y PROCEDIMIENTOS ESTABLECIDOS PARA EL DESARROLLO DE SU TRABAJO.
						      	</td>



						    </tr>

						    	<tr>	


						    	

						    	<td>	
						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="tec_org_trabajo" id="tec_trabajo1" value="4"required>
 												 <label class="form-check-label" for="x1">
  														 (4)Sobresaliente
											     </label>
										</div>
						    	</td>


						    	<td>	

						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="tec_org_trabajo" id="tec_trabajo2" value="3"required>
 												 <label class="form-check-label" for="x1">
  														 (3)Bueno
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="tec_org_trabajo" id="tec_trabajo3" value="2"required>
 												 <label class="form-check-label" for="x1">
  														 (2)Regular
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="tec_org_trabajo" id="tec_trabajo4" value="1"required>
 												 <label class="form-check-label" for="x1">
  														 (1)Deficiente
											     </label>
										</div>

						    	</td>

						    	</tr>

						    
						  </tbody>
						</table>
						<br>

						<!-- Factor5 -->
					 <table class="table table-bordered">
						  
						  <tbody>
						    <tr>
						     <center> <th rowspan="2" scope="row">NECESIDAD DE SUPERVISIÓN</th></center>
						      <td>	
								 NO REQUIERE SUPERVISIÓN PARA REALIZAR LAS FUNCIONES QUE TIENE ENCOMENDADAS DE ACUERDO CON EL PERFIL DE PUESTO.
						      </td>
						      
						      	<td>
						      		REQUIERE MÍNIMA SUPERVISIÓN PARA REALIZAR LAS FUNCIONES QUE TIENE ENCOMENDADAS DE ACUERDO CON EL PERFIL DE PUESTO
						      	</td>

						      	<td>
						      		OCASIONALMENTE REQUIERE SUPERVISIÓN PARA REALIZAR LAS FUNCIONES QUE TIENE ENCOMENDADAS DE ACUERDO CON EL PERFIL DE PUESTO.
						      	</td>

						      	<td>
						      		REQUIERE PERMANENTE SUPERVISIÓN PARA REALIZAR LAS FUNCIONES QUE TIENE ENCOMENDADAS DE ACUERDO CON EL PERFIL DE PUESTO.
						      	</td>



						    </tr>

						    	<tr>	


						    	

						    	<td>	
						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="necesidad" id="necesidad1" value="4"required>
 												 <label class="form-check-label" for="x1">
  														 (4)Sobresaliente
											     </label>
										</div>
						    	</td>


						    	<td>	

						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="necesidad" id="necesidad2" value="3"required>
 												 <label class="form-check-label" for="x1">
  														 (3)Bueno
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="necesidad" id="necesidad3" value="2"required>
 												 <label class="form-check-label" for="x1">
  														 (2)Regular
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="necesidad" id="necesidad4" value="1"required>
 												 <label class="form-check-label" for="x1">
  														 (1)Deficiente
											     </label>
										</div>

						    	</td>

						    	</tr>

						    
						  </tbody>
						</table>
						<br>
						<!-- Factor5 -->
					 <table class="table table-bordered">
						  
						  <tbody>
						    <tr>
						     <center> <th rowspan="2" scope="row">CAPACITACIÓN RECIBIDA</th></center>
						      <td>	
								 APLICA AMPLIAMENTE LOS CONOCIMIENTOS ADQUIRIDOS MEDIANTE LA CAPACITACIÓN, LO QUE LE PERMITE ELEVAR EN GRADO MÁXIMO LA EFICIENCIA Y EFICACIA DE SU TRABAJO.
						      </td>
						      
						      	<td>
						      		APLICA DE MODO SUFICIENTE LOS CONOCIMIENTOS ADQUIRIDOS MEDIANTE LA CAPACITACIÓN, LO QUE LE PERMITE ELEVAR MEDIANAMENTE LA EFICIENCIA Y EFICACIA DE SU TRABAJO.
						      	</td>

						      	<td>
						      		APLICA DE MODO BÁSICO LOS CONOCIMIENTOS ADQUIRIDOS MEDIANTE LA CAPACITACIÓN, LO QUE LE PERMITE ELEVAR ESCASAMENTE LA EFICIENCIA Y EFICACIA DE SU TRABAJO.
						      	</td>

						      	<td>
						      		RARA VEZ APLICA EN SU TRABAJO LOS CONOCIMIENTOS ADQUIRIDOS MEDIANTE LA CAPACITACIÓN, LO QUE LE IMPIDE ELEVAR LA EFICIENCIA Y EFICACIA DE SU TRABAJO.
						      	</td>



						    </tr>

						    	<tr>	


						    	

						    	<td>	
						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="capacitacion" id="capacitacion1" value="4"required>
 												 <label class="form-check-label" for="x1">
  														 (4)Sobresaliente
											     </label>
										</div>
						    	</td>


						    	<td>	

						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="capacitacion" id="capacitacion2" value="3"required>
 												 <label class="form-check-label" for="x1">
  														 (3)Bueno
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="capacitacion" id="capacitacion3" value="2"required>
 												 <label class="form-check-label" for="x1">
  														 (2)Regular
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="capacitacion" id="capacitacion4" value="1"required>
 												 <label class="form-check-label" for="x1">
  														 (1)Deficiente
											     </label>
										</div>

						    	</td>

						    	</tr>

						    
						  </tbody>
						</table>
						<br>
						<!-- Factor6 -->
					 <table class="table table-bordered">
						  
						  <tbody>
						    <tr>
						     <center> <th rowspan="2" scope="row">INICIATIVA</th></center>
						      <td>	
								 REALIZA APORTACIONES DESTACADAS PARA EL MEJORAMIENTO DEL TRABAJO, LO CUAL CONTRIBUYE A LA DISMINUCIÓN DE LOS TIEMPOS Y EL AUMENTO DE LA CALIDAD EN LA PRESTACIÓN DE LOS SERVICIOS.
						      </td>
						      
						      	<td>
						      		REALIZA ALGUNAS APORTACIONES PARA EL MEJORAMIENTO DEL TRABAJO, LO CUAL CONTRIBUYE A LA DISMINUCIÓN DE LOS TIEMPOS Y EL AUMENTO DE LA CALIDAD EN LA PRESTACIÓN DE LOS SERVICIOS.
						      	</td>

						      	<td>
						      		REALIZA APORTACIONES NO RELEVANTES PARA EL MEJORAMIENTO DEL TRABAJO, LO CUAL PROVOCA UN MÍNIMO IMPACTO EN LA DISMINUCIÓN DE LOS TIEMPOS Y EL AUMENTO DE LA CALIDAD EN LA PRESTACIÓN DE LOS SERVICIOS.
						      	</td>

						      	<td>
						      		REALIZA NULAS APORTACIONES PARA EL MEJORAMIENTO DE SU TRABAJO, POR LO QUE NO CONTRIBUYE A LA DISMINUCIÓN DE LOS TIEMPOS NI AL AUMENTO DE LA CALIDAD EN LA PRESTACIÓN DE LOS SERVICIOS.
						      	</td>



						    </tr>

						    	<tr>	


						    	

						    	<td>	
						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="iniciativa" id="iniciativa1" value="4"required>
 												 <label class="form-check-label" for="x1">
  														 (4)Sobresaliente
											     </label>
										</div>
						    	</td>


						    	<td>	

						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="iniciativa" id="iniciativa2" value="3"required>
 												 <label class="form-check-label" for="x1">
  														 (3)Bueno
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="iniciativa" id="iniciativa3" value="2"required>
 												 <label class="form-check-label" for="x1">
  														 (2)Regular
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="iniciativa" id="iniciativa4" value="1"required>
 												 <label class="form-check-label" for="x1">
  														 (1)Deficiente

  												 </label>
						    	</td>

						    	</tr>

						    
						  </tbody>
						</table>
						<br>
						<!-- Factor7 -->
					 <table class="table table-bordered">
						  
						  <tbody>
						    <tr>
						     <center> <th rowspan="2" scope="row">COLABORACIÓN Y DISCRECIÓN</th></center>
						      <td>	
								 MUESTRA NOTABLE DISPOSICIÓN PARA COLABORAR EN LA REALIZACIÓN DEL TRABAJO Y SABE UTILIZAR POSITIVAMENTE LA INFORMACIÓN QUE MANEJA.
						      </td>
						      
						      	<td>
						      		MUESTRA BUENA DISPOSICIÓN PARA COLABORAR EN LA REALIZACIÓN DEL TRABAJO Y ES PRUDENTE CON LA INFORMACIÓN QUE MANEJA.
						      	</td>

						      	<td>
						      		MUESTRA REGULAR DISPOSICIÓN PARA COLABORAR EN LA REALIZACIÓN DEL TRABAJO Y COMETE INDISCRECIONES INVOLUNTARIAS CON LA INFORMACIÓN QUE MANEJA.
						      	</td>

						      	<td>
						      		MUESTRA NULA DISPOSICIÓN PARA COLABORAR EN LA REALIZACIÓN DEL TRABAJO Y PROVOCA CONFLICTOS CON LA INFORMACIÓN QUE MANEJAS</td>



						    </tr>

						    	<tr>	


						    	

						    	<td>	
						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="colaboracion" id="colaboracion1" value="4"required>
 												 <label class="form-check-label" for="x1">
  														 (4)Sobresaliente
											     </label>
										</div>
						    	</td>


						    	<td>	

						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="colaboracion" id="colaboracion2" value="3"required>
 												 <label class="form-check-label" for="x1">
  														 (3)Bueno
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="colaboracion" id="colaboracion3" value="2"required>
 												 <label class="form-check-label" for="x1">
  														 (2)Regular
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="colaboracion" id="colaboracion4" value="1"required>
 												 <label class="form-check-label" for="x1">
  														(1)Deficiente
											     </label>
										</div>

						    	</td>

						    	</tr>

						    
						  </tbody>
						</table>
						<br>
						<!-- Factor8 -->
					 <table class="table table-bordered">
						  
						  <tbody>
						    <tr>
						     <center> <th rowspan="2" scope="row">RESPONSABILIDAD Y DISCIPLINA</th></center>
						      <td>	
								CUMPLE DE MODO SOBRESALIENTE CON LOS OBJETIVOS Y METAS INDIVIDUALES Y SIEMPRE SE SUJETA A LAS INSTRUCCIONES O DISPOSICIONES ESTABLECIDAS.
						      </td>
						      
						      	<td>
						      		CUMPLE CON LOS OBJETIVOS Y METAS INDIVIDUALES, SIN OBJETAR LAS DISPOSICIONES ESTABLECIDAS.
						      	</td>

						      	<td>
						      		CUMPLE OCASIONALMENTE CON LOS OBJETIVOS Y METAS INDIVIDUALES Y/O CON FRECUENCIA MANIFIESTA INCONFORMIDAD CON LAS DISPOSICIONES ESTABLECIDAS.
						      	</td>

						      	<td>
						      		CUMPLE DE MODO MÍNIMO O NULO CON SUS OBJETIVOS Y METAS INDIVIDUALES E INCLUSO EVADE LAS DISPOSICIONES ESTABLECIDAS.</td>



						    </tr>

						    	<tr>	


						    	

						    	<td>	
						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="responsabilidad" id="responsabilidad1" value="4"required>
 												 <label class="form-check-label" for="x1">
  														 (4)Sobresaliente
											     </label>
										</div>
						    	</td>


						    	<td>	

						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="responsabilidad" id="responsabilidad2" value="3"required>
 												 <label class="form-check-label" for="x1">
  														 (3)Bueno
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="responsabilidad" id="responsabilidad3" value="2"required>
 												 <label class="form-check-label" for="x1">
  														(2)Regular
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="responsabilidad" id="responsabilidad4" value="1"required>
 												 <label class="form-check-label" for="x1">
  														 (1)Deficiente
											     </label>
										</div>

						    	</td>

						    	</tr>

						    
						  </tbody>
						</table>
						<br>
						<!-- Factor9 -->
					 <table class="table table-bordered">
						  
						  <tbody>
						    <tr>
						     <center> <th rowspan="2" scope="row">TRABAJO EN EQUIPO</th></center>
						      <td>	
								MANIFIESTA NOTABLE DISPOSICIÓN, PARA TRABAJAR EN EQUIPO Y COMO MIEMBRO DEL EQUIPO, ES UN ELEMENTO FUNDAMENTAL PARA LA EFICIENCIA DEL MISMO.
						      </td>
						      
						      	<td>
						      		MANIFIESTA BUENA DISPOSICIÓN, PARA TRABAJAR EN EQUIPO Y COMO MIEMBRO DEL EQUIPO, ES UN ELEMENTO QUE BENEFICIA AL MISMO.
						      	</td>

						      	<td>
						      		MANIFIESTA REGULAR DISPOSICIÓN, PARA TRABAJAR EN EQUIPO Y COMO MIEMBRO DEL EQUIPO, ES UN ELEMENTO QUE INTERFIERE A LA ACCIÓN DEL MISMO.
						      	</td>

						      	<td>
						      		MANIFIESTA NULA DISPOSICIÓN PARA COLABORAR EN EQUIPO Y COMO MIEMBRO DEL EQUIPO, ENTORPECE LOS TRABAJOS DEL MISMO.</td>



						    </tr>

						    	<tr>	


						    	

						    	<td>	
						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="trabajo_equipo" id="trabajo_equipo1" value="5">
 												 <label class="form-check-label" for="x1">
  														 (5)Sobresaliente
											     </label>
										</div>
						    	</td>


						    	<td>	

						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="trabajo_equipo" id="trabajo_equipo2" value="4">
 												 <label class="form-check-label" for="x1">
  														 (4)Bueno
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="trabajo_equipo" id="trabajo_equipo3" value="3">
 												 <label class="form-check-label" for="x1">
  														 (3)Regular
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="trabajo_equipo" id="trabajo_equipo4" value="2">
 												 <label class="form-check-label" for="x1">
  														 (2)Deficiente
											     </label>
										</div>

						    	</td>

						    	</tr>

						    
						  </tbody>
						</table>

						<br>
						<!-- Factor10-->
					 <table class="table table-bordered">
						  
						  <tbody>
						    <tr>
						     <center> <th rowspan="2" scope="row">RELACIONES INTERPERSONALES</th></center>
						      <td>	
								MANTIENE EXCELENTE GRADO DE INTERACCIÓN CON SUS SUPERIORES JERÁRQUICOS, COMPAÑERAS Y COMPAÑEROS Y/O CIUDADANÍA.
						      </td>
						      
						      	<td>
						      		MANTIENE BUEN GRADO DE INTERACCIÓN CON SUS SUPERIORES JERÁRQUICOS, COMPAÑERAS Y COMPAÑEROS Y/O CIUDADANÍA.
						      	</td>

						      	<td>
						      		MANTIENE REGULAR GRADO DE INTERACCIÓN CON SUS SUPERIORES JERÁRQUICOS, COMPAÑERAS Y COMPAÑEROS Y/O CIUDADANÍA.
						      	</td>

						      	<td>
						      		MANTIENE NULO GRADO DE INTERACCIÓN CON SUS SUPERIORES JERÁRQUICOS, COMPAÑERAS Y COMPAÑEROS Y/O CIUDADANÍA.</td>



						    </tr>

						    	<tr>	


						    	

						    	<td>	
						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="relacion" id="relacion1" value="4">
 												 <label class="form-check-label" for="x1">
  														 (4)Sobresaliente
											     </label>
										</div>
						    	</td>


						    	<td>	

						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="relacion" id="relacion2" value="3">
 												 <label class="form-check-label" for="x1">
  														 (3)Bueno
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="relacion" id="relacion3" value="2">
 												 <label class="form-check-label" for="x1">
  														 (2)Regular
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="relacion" id="relacion4" value="1">
 												 <label class="form-check-label" for="x1">
  														 (1)Deficiente
											     </label>
										</div>

						    	</td>

						    	</tr>

						    
						  </tbody>
						</table>

						<br>
						<!-- Factor11-->
					 <table class="table table-bordered">
						  
						  <tbody>
						    <tr>
						     <center> <th rowspan="2" scope="row">MEJORA CONTÍNUA</th></center>
						      <td>	
								DEMUESTRA COMPROMISO DESTACADO PARA IDENTIFICAR ÁREAS DE OPORTUNIDAD Y PROPONER MEJORAS, CON LA FINALIDAD DE ALCANZAR LOS OBJETIVOS Y METAS INSTITUCIONALES.
						      </td>
						      
						      	<td>
						      		DEMUESTRA BUEN COMPROMISO PARA IDENTIFICAR ÁREAS DE OPORTUNIDAD Y PROPONER MEJORAS, CON LA FINALIDAD DE ALCANZAR LOS OBJETIVOS Y METAS INSTITUCIONALES
						      	</td>

						      	<td>
						      		DEMUESTRA REGULAR COMPROMISO PARA IDENTIFICAR ÁREAS DE OPORTUNIDAD Y PROPONER MEJORAS, CON LA FINALIDAD DE ALCANZAR LOS OBJETIVOS Y METAS INSTITUCIONALES.
						      	</td>

						      	<td>
						      		DEMUESTRA MÍNIMO O NULO COMPROMISO PARA IDENTIFICAR ÁREAS DE OPORTUNIDAD Y PROPONER MEJORAS, CON LA FINALIDAD DE ALCANZAR LOS OBJETIVOS Y METAS INSTITUCIONALES.</td>



						    </tr>

						    	<tr>	


						    	

						    	<td>	
						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="mejora_continua" id="mejora_continua1" value="4">
 												 <label class="form-check-label" for="x1">
  														 (4)Sobresaliente
											     </label>
										</div>
						    	</td>


						    	<td>	

						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="mejora_continua" id="mejora_continua2" value="3">
 												 <label class="form-check-label" for="x1">
  														 (3)Bueno
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="mejora_continua" id="mejora_continua3" value="2">
 												 <label class="form-check-label" for="x1">
  														 (2)Regular
											     </label>
										</div>

						    	</td>

						    	<td>	


						    			<div class="form-check">
 										 <input class="form-check-input" type="radio" name="mejora_continua" id="mejora_continua4" value="1">
 												 <label class="form-check-label" for="x1">
  														 (1)Deficiente
											     </label>
										</div>

						    	</td>

						    	</tr>

						    
						  </tbody>
						</table>
						<br>
						<br>
						
						<center><h4>FAVOR DE SER BREVE EN LOS COMENTARIOS YA QUE EL SISTEMA SOLO PERMITE CAPTURAR 255 CARACTERES INCLUYENDO ESPACIOS
				  		</h4></center>
						<hr class="red">
				        <center><h5>COMENTARIOS DEL PERSONAL EVALUADO
				  		</h5></center>
					 <table class="table table-bordered">
						  
						  <tbody>
						    <tr>
						     
						      
						    <textarea class="form-control" id="comentario1" name="comentario1" rows="3" maxlength="255"></textarea>


						    </tr>
						    
						  </tbody>
						</table>

						

						

						<br>

						   <center><h5>COMENTARIOS DEL PERSONAL EVALUADOR
				  		</h5></center>
				  		<br>
				  		 <center><h6>SI EL PERSONAL EVALUADO HA SIDO CAPACITADO, DESCRIBA BREVEMENTE CUAL HA SIDO EL IMPACTO DE LAS ACCIONES DE CAPACITACIÓN EN LOS PROCESOS COTIDIANOS DE SUS LABORES:</h6></center>




					 <table class="table table-bordered">
						  
						  <tbody>
						    <tr>
						     
						      
						    <textarea class="form-control" id="comentario2" name="comentario2" rows="3" maxlength="255"></textarea>


						    </tr>
						    
						  </tbody>
						</table>

					

						   
				  		<br>
				  		 <center><h6>DESCRIBA BREVEMENTE LAS APORTACIONES QUE EL PERSONAL EVALUADO HA REALIZADO PARA MEJORAR SUS PROCESOS DE TRABAJO:</h6></center>




					 <table class="table table-bordered">
						  
						  <tbody>
						    <tr>
						     
						      
						    <textarea class="form-control" id="comentario3" name="comentario3" rows="3" maxlength="255"></textarea>


						    </tr>
						    
						  </tbody>
						</table>

					<br>
				  		 <center><h6>RESPECTO A LA EVALUACIÓN DEL PERSONAL EVALUADO OBTENIDA EL AÑO ANTERIOR, DESCRIBA BREVEMENTE SI SE OBSERVAN MODIFICACIONES POSITIVAS O NEGATIVAS, RESPECTO A SU TRABAJO:</h6></center>




					 <table class="table table-bordered">
						  
						  <tbody>
						    <tr>
						     
						      
						    <textarea class="form-control" id="comentario4" name="comentario4" rows="3" maxlength="255"></textarea>


						    </tr>
						    
						  </tbody>
						</table>

						<br>
				  		 <center><h6>MENCIONE ÁREAS DE OPORTUNIDAD QUE EL PERSONAL EVALUADO DEBE CUBRIR:</h6></center>




					 <table class="table table-bordered">
						  
						  <tbody>
						    <tr>
						     
						      
						    <textarea class="form-control" id="comentario5" name="comentario5" rows="3" maxlength="255"></textarea>


						    </tr>
						    
						  </tbody>
						</table>

						<br>
				  		 <center><h6> 
						MENCIONE LAS NECESIDADES DE CAPACITACIÓN QUE USTED CONSIDERE NECESARIAS PARA QUE EL TRABAJADOR INCREMENTE SU EFICIENCIA LABORAL:
						</h6></center>




					 <table class="table table-bordered">
						  
						  <tbody>
						    <tr>
						     
						      
						    <textarea class="form-control" id="comentario6" name="comentario6" rows="3" maxlength="255"></textarea>


						    </tr>
						    
						  </tbody>
						</table>

















		<br>
		 <center><h4>Revisar bien los datos antes de registrar, ya que no podrán ser borrados</h4></center>
		<br>

		<center> <button class="btn btn-danger">Registrar evaluacion <span  class="glyphicon glyphicon-pencil"></span></button> </center>
            </form>

         <br>
         <br>
         <br>

        
        <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
 		<script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>
		</body>
		</html>
		