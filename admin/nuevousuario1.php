<?php
 	
	require 'conexion.php';


	$id_usuario = $_POST['id_usuario'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	$apellido_paterno = $_POST['apellido_paterno'];
	$apellido_materno = $_POST['apellido_materno'];
	$nombre = $_POST['nombre'];
	$ur = $_POST['ur'];
	$nivel = $_POST['nivel'];
	$curp = $_POST['curp'];
	$fecha_inicio = $_POST['fecha_inicio'];
	$puesto = $_POST['puesto'];
	$tipo = $_POST['tipo'];
	
		

	
	$sql1 = "INSERT INTO usuarios (id_usuario, usuario, password, apellido_paterno, apellido_materno, nombre, ur, nivel, curp, fecha_inicio, puesto,tipo_usuario)VALUES ('$id_usuario', '$usuario', '$password', '$apellido_paterno', '$apellido_materno', '$nombre', '$ur', '$nivel', '$curp', '$fecha_inicio', '$puesto', '$tipo')";




	$cambio=$mysqli->query($sql1);
	
	
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

			    <img  src="imagenes/logoeconomia.jpg">
 
 		   </head>
		  	<body>
		    <div class="container">

 					
		   		<br>
		   		 <header>
		    	<hr>
		    	<center><h3>Registro de nuevo servidor p&uacute;blico </h3></center>
		   		 <hr>
		   		 </header>
		   		 <br>
		   		 <br>
		   		 <br>
		   		  

		   		 <div class="container">
		   		 	
		   		<center><h5>

		   		<?php

		   		if ($cambio>0) {
		   			

		   		
                  echo "Se ha registrado el servidor publico" ;

                }else{

                  echo "Error al registrar" ;

                }


		   		?>

				   		

		   		</h5></center> 


		   		<br>
        		 <br>
        		 <br>
		   		<center><a href="menu.php"><button class="btn btn-primary"  > Regresar al menu <span  class="glyphicon glyphicon-arrow-left"></span></button></a></center>	
		   		 </div>


		   		  <br>
         <br>
         <br>


        
        <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
 		<script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>
		</body>
		</html>


		   		 