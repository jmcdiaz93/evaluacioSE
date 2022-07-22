<?php
 	session_start();
	require 'conexion.php';

	if (!isset($_SESSION["id_usuario"])) {
		header("Location:index.php");

	}




	$idusuario = $_POST['idusuario'];
		

	$query = "SELECT * FROM usuarios WHERE id_usuario='$idusuario' ";

	$result = $mysqli->query($query);

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
			    <title>Evaluaci&oacute;n de Desempe&ntilde;o</title>

			  

			    <!-- Bootstrap core CSS -->
			  <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">
			   

			    <!-- Custom styles for this template -->
			    <br>

			    <div class="col-xs-1"></div>

			   <img  src="imagenes/sfp.jpg">
 
 		   </head>
		  	<body>
		    <div class="container">

 					
		   		<br>
		   		 <header>
		   			  
		    		 <center><h3>C&eacute;dula de Evaluaci&oacute;n de Desempe&ntilde;o</h3></center>
		 			  <hr class="red">
		   		 </header>
		   		 



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



				 <br>
				 <center><h4>Resultados de Evaluaci&oacute;n 2019-2020</h4></center>
				<hr class="red">
				<p>	 <center><h4>	
				  <?php

		   		 $idusuario = $_POST['idusuario'];


				$sql1 = "SELECT * FROM resultados WHERE id_usuario='$idusuario' and anio= '2020'";

				$result = $mysqli->query($sql1);

				$row = $result->fetch_assoc();
				if (empty($row)) {

						echo "Aun no se ha evaluado el servidor p&uacute;blico, seleccione otro";

					}else{

				?>
		        	
				</h4></center></p>

				<div class="col-sm-4"></div>
				<div class="container">
				 	



				<div class=" col-sm-4 col-md-4" >
				
				

				 <table  align="center"  class="table table-bordered table-dark">
					  
				 	<?php	

				 	require 'conexion.php';
					
					$idusuario = $_POST['idusuario'];

					$sql1= "SELECT res_metas,res_factores, res_final,fecha_evaluacion,nivel_desempenio FROM resultados WHERE id_usuario='$idusuario' AND anio='2020'"; 

					$result = $mysqli->query($sql1);
					
					$row = $result->fetch_assoc();


					

					

					

				 	?>

					  <tbody>
					    <tr>
					      
					      <td>PUNTAJE TOTAL DE METAS:</td>
					      <td><center> <?php echo ($row['res_metas']); ?></center> </td>
					      
					    </tr>
					    <tr>
					      
					      <td>PUNTAJE TOTAL DE FACTORES:</td>
					      <td><center><?php echo ($row['res_factores']); ?></center></td>
					      
					    </tr>
					    <tr>
					      <td>CALIFICACION GLOBAL:</td>
					      <td><center><?php echo ($row['res_final']); ?></center></td>
					      
					    </tr>

					    <tr>
					      <td>NIVEL DE DESEMPE&Ntilde;O:</td>
					      <td><center><?php echo ($row['nivel_desempenio']); ?></center></td>
					      
					    </tr>

					      <tr>
					      <td>FECHA DE EVALUACION:</td>
					      <td><center><?php echo ($row['fecha_evaluacion']); ?></center></td>
					      
					    </tr>
					  </tbody>
				</table>


				</div>

				</center>

			 </div>
			  <br>
				<center><h4>Firmas de Conformidad</h4></center>
				<hr class="red">

				<br>
				<br>
				
				
				

				

				
				  <fieldset disabled>
				  <div class="form-row">
				  <div class="col-xs-12 col-sm-12 col-md-12">
		  		  <div class="col-sm-4">
		  			 <?php



			  		 $result = $mysqli->query($query);

					$row = $result->fetch_assoc();
					?>
					<hr>
			  		 <center><h6><?php  echo ($row['apellido_paterno']); ?> <?php  echo ($row['apellido_materno']); ?> <?php  echo ($row['nombre']); ?></h6></center> 
			  		   
		  		  </div>


		  		  <?php

	          	  
	          	require ('conexion.php');

	            

				$sql = "SELECT rfc_superior,rfc_tercer FROM metas WHERE id_usuario='$idusuario' and anio='2020'";

				$result = $mysqli->query($sql);

				
				$row = $result->fetch_assoc();

				$rfc1=$row['rfc_superior'];
				$rfc2=$row['rfc_tercer'];

	           

				$query = "SELECT apellido_paterno,apellido_materno,nombre FROM usuarios WHERE usuario='$rfc1' ";

				$resultado = $mysqli->query($query);

				$row = $resultado->fetch_assoc();

				$apellido_paterno1=$row['apellido_paterno'];
				$apellido_materno1=$row['apellido_materno'];
				$nombre1=$row['nombre'];

	            ?>



		   		 <div class="col-sm-4">
		    	 <hr>
			  		 <center><h6><?php  echo ($apellido_paterno1); ?> <?php  echo ($apellido_materno1); ?> <?php  echo ($nombre1); ?></h6></center> 
		    	</div>

		    	 <?php

	          	require ('conexion.php');	  
	        

	           

				$query1 = "SELECT apellido_paterno,apellido_materno,nombre FROM usuarios WHERE usuario='$rfc2' ";

				$resultado = $mysqli->query($query1);

				$row = $resultado->fetch_assoc();

				$apellido_paterno2=$row['apellido_paterno'];
				$apellido_materno2=$row['apellido_materno'];
				$nombre2=$row['nombre'];


				

		 

	            ?>



		    	<div class="col-sm-4">
		    	   <hr>
			  		 <center><h6><?php  echo ($apellido_paterno2); ?> <?php  echo ($apellido_materno2); ?> <?php  echo ($nombre2); ?></h6></center>
		    	</div>



		    	</div>

		  		</div>
		  		</fieldset>
		    
				

			 </div>

		<?php }?>
		<br>
		<br>

		<center><button class="btn btn-primary" onclick="window.print()" > Imprimir </button>&nbsp; <a href="menu.php"><button class="btn btn-default" > Regresar a Menú <span  class="glyphicon glyphicon-arrow-left"></button></a>&nbsp; <a href="index.php"><button class="btn btn-danger" > Salir </button></a></center>
		<br>
		<br>

		
		<script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
 		<script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>
		</body>
		</html>
		