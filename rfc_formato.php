<?php
	

	session_start();
	require 'conexion.php';

	if (!isset($_SESSION["id_usuario"])) {
		header("Location:index.php");

	}


	$idusuario = $_SESSION['id_usuario'];

	$sql = "SELECT  apellido_paterno,apellido_materno,nombre,puesto,ur,nivel,usuario FROM usuarios WHERE id_usuario = '$idusuario' ";



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
		    
		    		 <center><h2>Formato de Impresión</h2></center>
		         <hr class="red">
		   		 </header>
		   		
		        	

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
						    <tr>
						      <th scope="row">RFC</th>
						      <td><?php echo ($row['usuario']); ?></td>
						      
						    </tr>
						  </tbody>
						</table>


				 



		 <hr class="featurette-divider">
		 <br>
		        
		     <?php

            require ('conexion.php');

            $idusuario = $_SESSION['id_usuario'];

			$sql = "SELECT usuario FROM usuarios WHERE id_usuario = '$idusuario' ";

			$result = $mysqli->query($sql);

			$row = $result->fetch_assoc();

			$rfc=$row['usuario'];

            ?>

		 	

		   <form  method="POST"  action="consulta_formato.php">
		 	
		 	<div class="form-group col-md-4">
    		  <label for="inputState"><b>Seleccione el nombre del evaluado</b></label>

    		  
    		  	<select id="id_evaluado" name="id_evaluado" class="form-control" required>
			        <option>......</option>

						<?php

				            require ('conexion.php');


				          
				               
				          
				          $query= "SELECT  id_usuario, apellido_paterno, apellido_materno, nombre,usuario  FROM usuarios where id_usuario IN (SELECT id_usuario FROM metas WHERE rfc_superior='$rfc' AND anio='2021') ORDER BY apellido_paterno" ;

				          if ($resultado =$mysqli->query($query))   

				          {

				            while($row=$resultado->fetch_assoc()) 

				            {

				            ?>

				         <option value=" <?php echo $row['id_usuario'];?>"> <?php echo ($row['apellido_paterno']) ," ", ($row['apellido_materno']), " ", ($row['nombre']) ; ?></option>

				            <?php 

				            } 


				          }


				          

				           ?>


				      </select>

    		  </div>
    		 <br>
    		 <br>
    		 <br>
    		 <br>
    		 <br>
    		 <br>

    	<center><button class="btn btn-danger">Consultar Formato</button></center> 

       </form>
       	<br>


       	 <center>	<a href="metas.php"><button class="btn btn-primary" > Regresar a Menú</button></a></center>

       	 <br>
       	 <br>
       	 <br>
       	 <br>

        


		<script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
 		<script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>
		</body>
		</html>
