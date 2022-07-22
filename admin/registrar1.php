<?php
  
	require 'conexion.php';

  	$idusuario= $_POST['id_usuario'];
	$funcion1 = $_POST['funcion1'];
	$funcion2 = $_POST['funcion2'];
	$funcion3 = $_POST['funcion3'];
	$funcion4 = $_POST['funcion4'];
	$funcion5 = $_POST['funcion4'];
	$funcion6 = $_POST['funcion4'];
	$funcion7 = $_POST['funcion4'];


	$meta1 = $_POST['meta1'];
	$meta2 = $_POST['meta2'];
	$meta3 = $_POST['meta3'];
	$meta4 = $_POST['meta4'];
	$rfc_superior= $_POST['rfc_superior'];
	$rfc_tercer= $_POST['rfc_tercer'];

	$query1 = "SELECT * FROM metas WHERE id_usuario='$idusuario' AND anio='2021'";

	$resultado1 = $mysqli->query($query1);

	$row1= $resultado1->fetch_assoc();

	
	if ($row1>0) {


		header("Location:registrar2.php?id=$idusuario");


	}	
	else{
	

	
	$sql = "INSERT INTO metas ( id_usuario,meta1,meta2, meta3,meta4,funcion1,funcion2,funcion3,funcion4,funcion5,funcion6,funcion7,rfc_superior,rfc_tercer,anio) VALUES

	 ('$idusuario','$meta1','$meta2','$meta3','$meta4','$funcion1','$funcion2','$funcion3','$funcion4',NULL,NULL,NULL,'$rfc_superior','$rfc_tercer','2021')";




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
		   		 	
		   		<center><h5>

		   		<?php

		   		if ($guardar>0) {
		   			

		   		
                  echo "Se han guardado las metas individuales " ;

                }else{

                  echo "Error al guardar metas" ;

                }


                }

				 ?>  		

		   		</h5></center> 
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


		   		 