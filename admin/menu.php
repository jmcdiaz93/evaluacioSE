<?php
	

	session_start();
	require 'conexion.php';

	if (!isset($_SESSION["id_usuario"])) {
		header("Location:index.php");

	}


	$idusuario = $_SESSION['id_usuario'];


	$sql = "SELECT  apellido_paterno,apellido_materno,nombre,puesto,ur,nivel FROM usuarios WHERE id_usuario = '$idusuario' ";



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

 					
		   		 <hr class="featurette-divider">
		   		 <header>
		    
		    		 <center><h2>Administrador</h2></center>
		    
		   		 </header>
		   		
		        	

		        	

				 <hr class="featurette-divider">

				 <br>
				 
				 <div class="container"> 
				 <center><h3>Men&uacute;</center></h3>
				 <hr class="red">
				 <div class="list-group">
					  <a href="reporte_completo.php" class="list-group-item list-group-item-action active"><h4><li>Descargar Reporte Completo de Evaluaciones</li></h4></a>
					  <a href="reporte_metas.php" class="list-group-item list-group-item-action "><h4><li>Descargar Reporte de Metas Registradas 2021-2022</li></h4></a>

					  <a href="cambioev.php" class="list-group-item list-group-item-action"><h4><li>Cambiar evaluadores</li></h4></a>
					  <a href="borrareva.php" class="list-group-item list-group-item-action"><h4><li>Borrar evaluaci&oacute;n</li></h4></a>
					  
					   <a href="borrarmetasindi.php" class="list-group-item list-group-item-action"><h4><li>Borrar Metas Individuales 2021-2022 registradas</li></h4></a>
					   <a href="actualizardatos.php" class="list-group-item list-group-item-action"><h4><li>Actualizar datos de Servidor P&uacute;blico  </li></h4></a>
					   <a href="nuevousuario.php" class="list-group-item list-group-item-action"><h4><li>Ingresar Nuevo Servidor P&uacute;blico  </li></h4></a>	
					   <a href="rmetas1.php" class="list-group-item list-group-item-action"><h4><li>Registrar metas 2021  </li></h4></a>
				 	   <a href="consulta2020.php" class="list-group-item list-group-item-action"><h4><li>Consultar evaluaciones 2020  </li></h4></a>
					 

		        </div>

		        </div>

		         <br>
	    		 <br>
	    		 <br>
	    		 

		        <a href="administrador.php"><center><button class="btn btn-primary btn-lg">SALIR</button></center> </a>
		       	 <br>
	    		 <br>
	    		 <br>
	    		 <br>
        


		<script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
 		<script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>
		</body>
		</html>
