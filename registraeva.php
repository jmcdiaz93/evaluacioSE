<?php
 	
	require 'conexion.php';


	$idevaluado = $_GET['id'];
	$m1a = $_POST['m1a'];
	$m1b = $_POST['m1b'];
	$m2a = $_POST['m2a'];
	$m2b = $_POST['m2b'];
	$m3a = $_POST['m3a'];
	$m3b = $_POST['m3b'];
	$m4a = $_POST['m4a'];
	$m4b = $_POST['m4b'];
	$conocimiento = $_POST['conocimiento'];
	$criterio = $_POST['criterio'];
	$calidad_trabajo = $_POST['calidad_trabajo'];
	$tec_org_trabajo = $_POST['tec_org_trabajo'];
	$necesidad = $_POST['necesidad'];
	$capacitacion = $_POST['capacitacion'];
	$iniciativa = $_POST['iniciativa'];
	$colaboracion = $_POST['colaboracion'];
	$responsabilidad = $_POST['responsabilidad'];
	$trabajo_equipo = $_POST['trabajo_equipo'];
	$relacion= $_POST['relacion'];
	$mejora_continua= $_POST['mejora_continua'];
	$comentario1= $_POST['comentario1'];
	$comentario2= $_POST['comentario2'];
	$comentario3= $_POST['comentario3'];
	$comentario4= $_POST['comentario4'];
	$comentario5= $_POST['comentario5'];
	$comentario6= $_POST['comentario6'];
	$originalDate = "2017-03-08";
	
	

	$query1 = "SELECT * FROM resultados WHERE id_usuario='$idevaluado' AND anio='2021'";

	$resultado1 = $mysqli->query($query1);

	$row1= $resultado1->fetch_assoc();

	
	if ($row1>0) {


		header("Location:registraeva1.php?id=$idevaluado");


	}	
	else{


	$valor_final_m1=$m1a+$m1b;
	$valor_final_m2=$m2a+$m2b;
	$valor_final_m3=$m3a+$m3b;
	$valor_final_m4=$m4a+$m4b;

	$res_metas=$valor_final_m1+$valor_final_m2+$valor_final_m3+$valor_final_m4;

	$res_factores = $conocimiento+$criterio+$calidad_trabajo+$tec_org_trabajo+$necesidad+$capacitacion+$iniciativa+$colaboracion+$responsabilidad+$trabajo_equipo+$relacion+$mejora_continua;

	$res_final = $res_factores+$res_metas;

	
				if ($res_final>=90) {
					$nivel_desempenio='SOBRESALIENTE';
				} elseif ($res_final>=76) {
					$nivel_desempenio='BUENO';
				}elseif ($res_final>=70) {
					$nivel_desempenio='REGULAR';
				}else {

					$nivel_desempenio='DEFICIENTE';
				}


	
	$sql = "INSERT INTO resultados (
		id_resultados, id_usuario, m1a, m2a, m3a, m4a, m1b, m2b, m3b, m4b, conocimiento, criterio, calidad_trabajo, tec_org_trabajo, necesidad, capacitacion, iniciativa, colaboracion, responsabilidad, trabajo_equipo, relacion, mejora_continua, res_metas, res_factores, res_final, nivel_desempenio, valor_final_m1, valor_final_m2, valor_final_m3, valor_final_m4, anio, fecha_evaluacion,comentario1,comentario2,comentario3,comentario4,comentario5,comentario6) 
		VALUES (NULL,'$idevaluado','$m1a','$m2a','$m3a','$m4a','$m1b','$m2b','$m3b','$m4b','$conocimiento','$criterio','$calidad_trabajo','$tec_org_trabajo','$necesidad','$capacitacion','$iniciativa', '$colaboracion', '$responsabilidad','$trabajo_equipo','$relacion','$mejora_continua','$res_metas','$res_factores','$res_final','$nivel_desempenio','$valor_final_m1','$valor_final_m2','$valor_final_m3','$valor_final_m4','2021',CURDATE(),'$comentario1','$comentario2','$comentario3','$comentario4','$comentario5','$comentario6')";




	$guardar=$mysqli->query($sql);


	}




	
	
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
		    	<center><h3>Evaluaci&oacute;n de Metas</h3></center>
		   		 <hr>
		   		 </header>
		   		 <br>
		   		 <br>
		   		 <br>
		   		  

		   		 <div class="container">
		   		 	
		   		<center><h5>

		   		<?php

		   		if ($guardar>0) {
		   			

		   		
                  echo "Se ha guardo la evaluacion " ;

                }else{

                  echo "Error guardar evaluacion" ;

                }


		   		?>

				   		

		   		</h5></center> 


		   		<br>
        		 <br>
        		 <br>
		   		<center><a href="metas.php"><button class="btn btn-primary"  > Regresar al menu <span  class="glyphicon glyphicon-arrow-left"></span></button></a>&nbsp; <a href="index.php"><button class="btn btn-danger" > Salir  <span  class="glyphicon glyphicon-remove"></span></button></a></center>	
		   		 </div>


		   		  <br>
         <br>
         <br>


        
        <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
 		<script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>
		</body>
		</html>


		   		 