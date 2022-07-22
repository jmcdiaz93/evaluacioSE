<?php
 	

	require 'conexion.php';

	$idusuario = $_POST['id_usuario'];


	$sql1 = "SELECT * FROM resultados WHERE id_usuario='$idusuario'";

	$result = $mysqli->query($sql1);

	$row = $result->fetch_assoc();
	if (empty($row)) {
			header("Location:rfc_formato.php");
	}else{
			header("Location:consulta_formato.php?id=$idusuario");

	}

			

		
	?>
