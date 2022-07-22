<?php
 	session_start();
	require 'conexion.php';

	if (!isset($_SESSION["id_usuario"])) {
		header("Location:index.php");

	}


	$idusuario = $_POST['id_evaluado'];

	
	$sql = "SELECT * FROM usuarios  

	WHERE id_usuario='$idusuario' ";



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

 					
		   		<br>
		   		 <header>
		    
		    		 <center><h3>K&aacute;rdex</h3></center>
		    
		   		 </header>
		   		  <hr class="red">
		   		 <br>
		        	

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


				<hr class="featurette-divider">
				 <p align ="justify">La Direcci&oacute;n General de Recursos Humanos a trav&eacute;s de la Direcci&oacute;n de Desarrollo del Capital Humano, pone a tu disposici&oacute;n el k&aacute;rdex del personal que vas a evaluar, con la finalidad de que cuentes con informaci&oacute;n actualizada de tus colaboradores, lo cual contribuya a realizar una <b>evaluaci&oacute;n objetiva.</b> Recuerda que para cada una de las metas que eval&uacute;es deber&aacute;s solicitar su carpeta de evidencias.</p>

				 <hr class="featurette-divider">
			
				 <center><h4>Capacitaci&oacute;n de los &uacute;ltimos 2 a&ntilde;os</h4></center>

				 <table class="table table-bordered">
      
    		<tr class="info">
    		<th>A&Ntilde;O</th>		
    		<th>NOMBRE DE LA CAPACITACI&Oacute;N</th>
       		<th>CALIFICACI&Oacute;N</th>
		
       		</tr>
		 	
       		
		        
		     <?php

            require ('conexion.php');

            $idusuario = $_POST['id_evaluado'];
			$sql = "SELECT * FROM capacitacion WHERE id_usuario = '$idusuario' and anio='2020' or anio='2021' ";


			  if ($resultado =$mysqli->query($sql))   

				          {

				            while($row=$resultado->fetch_assoc()) 

				            {

			?>
			


			<tr>	
			<td>  <?php echo $row['anio'];?></td>
       		<td>  <?php echo $row['curso'];?></td>
       		<td>  <?php echo $row['calificacion'];?></td>

       		</tr>

       		<?php 

				            } 


				          }


				          

				           ?>

       
       	</table>



       <br>

       <hr class="featurette-divider">
       <br>
   		
   		 <center><h4>Resultados de Evaluaci&oacute;n de Desempe&ntilde;o</h4></center>



   		 <div class="col-xs-3 col-sm-3 col-md-3	">	</div>	
		<div class="col-xs-6 col-sm-6 col-md-6	">	

		<table class="table table-bordered">
      
    		<tr class="info">
    		<th>A&Ntilde;O</th>	
    		<th>CALIFICACI&Oacute;N</th>
       		<th>NIVEL</th>
		
       		</tr>
		 	
       		
		        
		     <?php

            require ('conexion.php');

           $idusuario = $_POST['id_evaluado'];

			$sql = "SELECT * FROM evaluaciones WHERE id_usuario = '$idusuario' and anio ='2020' or anio='2021' ";


			  if ($resultado =$mysqli->query($sql))   

				          {

				            while($row=$resultado->fetch_assoc()) 

				            {

			?>


			<tr>	
			<td>  <?php echo $row['anio'];?></td>		
       		<td>  <?php echo $row['calificacion'];?></td>
       		<td>  <?php echo $row['nivel'];?></td>

       		</tr>

       		<?php 

				            } 


				          }


				          

				           ?>

       
       	</table>
		</div>

         <br>

         <br>
         <br>
         <div class="col-xs-12 col-sm-12 col-md-12	">
        <hr >
        <br>
         <center>	<a href="metas.php"><button class="btn btn-danger">Regresar a men&uacute;<span class="glyphicon glyphicon-chevron-left"></span></button></a></center>

         <br>
         <br>
         </div>
        <br>
         <br>
        <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
 		<script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>
		</body>
		</html>
		