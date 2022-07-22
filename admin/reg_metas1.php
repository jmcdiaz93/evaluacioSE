<?php
 	
	require 'conexion.php';


	$id_meta = $_POST['no_reg'];
	$id_usuario = $_POST['no_evaluado'];
	$funcion1 = $_POST['funcion1'];
	$funcion2 = $_POST['funcion2'];
	$funcion3 = $_POST['funcion3'];
	$funcion4 = $_POST['funcion4'];
	$meta1 = $_POST['meta1'];
	$meta2 = $_POST['meta2'];
	$meta3 = $_POST['meta3'];
	$meta4 = $_POST['meta4'];
	$rfc_superior= $_POST['rfc_superior'];
	$rfc_tercer= $_POST['rfc_tercer'];


	

	
	$sql = "INSERT INTO metas (id_meta, id_usuario,meta1, meta2, meta3,meta4,funcion1,funcion2,funcion3,funcion4,funcion5,funcion6,funcion7,rfc_superior,rfc_tercer,anio) VALUES ('$id_meta','$id_usuario','$meta1','$meta2','$meta3','$meta4','$funcion1','$funcion2','$funcion3','$funcion4',NULL,NULL,NULL,'$rfc_superior','$rfc_tercer','2020')";




	$guardar=$mysqli->query($sql);
	
	
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
		    	<hr>
		    	<center><h3>Registro de Metas</h3></center>
		   		 <hr>
		   		 </header>
		   		 <br>
		   		 <br>
		   		 <br>
		   		  

		   		 <div class="container">
		   		 	
		   		<center><h5>

		   		<?php

		   		if ($guardar>0) {
		   			

		   		
                  echo "Se han registrado las metas " ;

                }else{

                  echo "Error al registrar metas" ;

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


		   		 