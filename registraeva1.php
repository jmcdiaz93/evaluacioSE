<?php
	

	session_start();
	require 'conexion.php';

	if (!isset($_SESSION["id_usuario"])) {
		header("Location:index.php");

	}


	$idevaluado = $_GET['id'];

	$sql = "SELECT  apellido_paterno,apellido_materno,nombre FROM usuarios WHERE id_usuario = '$idevaluado' ";



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

 					
		   		 
		   		 <header>
		    
		    		 <center><h2>Evaluaci&oacute;n de Metas</h2></center>
		    
		   		 </header>
		   		
		        	
		        	

				 <hr class="red">

				 <br>
				 
				 <div class="container"> 
				 <center><p ><h4><?php  echo ($row['nombre']); ?> <?php  echo ($row['apellido_paterno']); ?> <?php  echo ($row['apellido_materno']); ?> 
				 ya se evalu&oacute;, regrese al men&uacute; para evaluar otro servidor p&uacute;blico.</h4></p></center>
				 <br>
				 

		        

		        </div>

		         <br>
	    		 <br>
	    		 <br>
	    		 

		        <a href="metas.php"><button class="btn btn-default" > Regresar a Men&uacute; <span  class="glyphicon glyphicon-arrow-left"></button></a>
		       	 <br>
	    		 <br>
	    		 <br>
	    		 <br>
        

	    		 
		<script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
 		<script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>
		</body>
		</html>
