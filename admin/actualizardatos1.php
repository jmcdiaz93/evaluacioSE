<?php
 	
	require 'conexion.php';


	$id_usuario = $_POST['id_usuario'];
	$puesto = $_POST['puesto'];
	$nivel = $_POST['nivel'];
	$ur = $_POST['ur'];
	
		

	
	$sql1 = "UPDATE usuarios SET puesto = '$puesto', nivel='$nivel',ur='$ur' WHERE id_usuario='$id_usuario';";




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
		    	<center><h3>Actualizar datos de servidor p&uacute;blico </h3></center>
		   		 <hr>
		   		 </header>
		   		 <br>
		   		 <br>
		   		 <br>
		   		  

		   		 <div class="container">
		   		 	
		   		<center><h5>

		   		<?php

		   		if ($cambio>0) {
		   			

		   		
                  echo "Se ha actualizado los datos del servidor p&uacute;blico" ;

                }else{

                  echo "Error al actualizar" ;

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


		   		 