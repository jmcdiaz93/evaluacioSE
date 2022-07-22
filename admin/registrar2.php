<?php
  

 	require 'conexion.php';


  	$idusuario = $_GET['id'];
	

	$query1 = "SELECT * FROM usuarios WHERE id_usuario='$idusuario' ";

	$result = $mysqli->query($query1);

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

			    <img  src="imagenes/logoeconomia.jpg">
 
 		   </head>
		  	<body>
		    <div class="container">

 					
		   		<br>
		   		 <header>
		    	<hr>
		    	<center><h3>Registro de Metas</h3></center>
		   		 <hr>
		   		 </header>
		   		 <br>
		   		 <br>
		   		 <br> 		  

		   		 <div class="container">

		   		 <h5><center><p>El usuario  
		   		 	
		   		

		   		<?php

		   		
		   		echo ($row['nombre']); ?> <?php  echo ($row['apellido_paterno']); ?> <?php  echo ($row['apellido_materno']);


                
				 ?>  		

		   		

		   		 ya tiene metas registradas 2021</p></center></h5>
		   		<br>
		   		<br>
				<br>
				<br>
				<br>

		   		

				
				 
		   		<center><a href="menu.php"><button class="btn btn-default" > Regresar a Men&uacute; <span  class="glyphicon glyphicon-arrow-left"></button></a>&nbsp;<a href="registro.php"><button class="btn btn-danger" > Salir  <span  class="glyphicon glyphicon-remove"></span></button></a></center>
		   		 </div>


		   		<br>
         		<br>


        
        <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
 		<script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>
		</body>
		</html>


		   		 