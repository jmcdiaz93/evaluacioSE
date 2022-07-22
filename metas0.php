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
		    

		   		 <header>
		    	<hr class="featurette-divider">
		    		 <center><h2>Registro y Consulta de Metas 2021-2022</h2></center>
		    	<hr class="featurette-divider">
		   		 </header>
		   		 <br>
		        <div class="col-xs-1"></div>
		        <div class="col-xs-10">

		        	<table  class="table table-striped">
		 
						 <tbody>
						    <tr>
						      <th scope="row">Nombre</th>
						      <td ><?php  echo ($row['nombre']); ?> <?php  echo ($row['apellido_paterno']); ?> <?php  echo ($row['apellido_materno']); ?></td>
						      
						    </tr>
						    <tr>
						      <th scope="row">Puesto</th>
						      <td><?php  header("Content-Type: text/html;charset=utf-8"); echo ($row['puesto']); ?></td>
						      
						    </tr>
						    <tr>
						      <th scope="row">Nivel</th>
						      <td><?php echo ($row['nivel']); ?></td>
						      
						    </tr>

						    <tr>
						      <th scope="row">UR</th>
						      <td><?php echo ($row['ur']); ?></td>
						      
						    </tr>
						  </tbody>
						</table>
					<hr class="featurette-divider">
				</div>
				 

				 <br>
				 
				 <div class="container"> 
				 <center><p><h3>Men&uacute;</h3></p></center>
				 <br>
				 <br>
				 <br>
				 <br>
				
				
				 

						     

				<div class="col-xs-12">

				<a href="metas1.php"><center><button class="btn btn-danger btn-lg">Registrar metas</button></center></a>
				 <br>
				<a href="formato_metas.php"><center><button class="btn btn-danger btn-lg">Consultar metas</button></center></a>

				</div>
	



			


				 <br>
	    		 <br>
	    		 <br>  
		         <br>
	    		
	    		
	    		<br>  
		    	<br>

	    	<br>  
		    <br>




			 
			  

				<hr class="featurette-divider">
	    		 <br>
	    		 <br>

		        <a href="index.html"><center><button class="btn btn-primary btn-lg">SALIR</button></center> </a>
		       	 <br>
	    		 <br>
	    		 <br>
	    		 <br>
	    		
	    		</div>
        

	   	<script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
 		<script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>
		</body>
		</html>
