<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename= Reporte_Evaluaciones.xls");

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

         <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">
      </head>
        <body>
        <div class="container">

          <div align="left">
         
              <br>
              <img  src="imagenes/logoeconomia.jpg">

             </div>

           <header>
        
             <center><h1>Reporte de Evaluaciones de Nivel Operativo</h1></center>
        
           </header>
           <br>



<br>

 <table class="table table-bordered">
      
    <tr class="info">
        <th>APELLIDO PATERNO</th>
        <th>APELLIDO MATERNO</th>
        <th>NOMBRE</th>
        <th>RFC</th>
        <th>UR</th>
        <th>NIVEL</th>
        <th>PUESTO</th>
        <th>CURP</th>
        <th>RESULTADO DE METAS</th>
        <th>RESULTADO DE FACTORES</th>
        <th>RESULTADO FINAL</th>
        <th>NIVEL DE DESEMPEÑO</th>
        <th>AÑO</th>
        <th>FECHA DE EVALUACION</th>
        
       </tr>
   

<?php

 require 'conexion.php';


          
               
          
          $query= "SELECT * FROM resultados INNER JOIN usuarios ON resultados.id_usuario= usuarios.id_usuario AND anio='2021'" ;




          if ($resultado =$mysqli->query($query))   

          {

            while($row=$resultado->fetch_assoc()) 

            {

 ?>



<tr>
<td><?php echo $row['apellido_paterno']; ?></td>
<td><?php echo $row['apellido_materno']; ?></td>
<td><?php echo $row['nombre']; ?></td>
<td><?php echo $row['usuario']; ?></td>
<td><?php echo $row['ur']; ?></td>
<td><?php echo $row['nivel']; ?></td>
<td><?php echo $row['puesto']; ?></td>
<td><?php echo $row['curp']; ?></td>
<td><?php echo $row['res_metas']; ?></td>
<td><?php echo $row['res_factores']; ?></td>
<td><?php echo $row['res_final']; ?></td>
<td><?php echo $row['nivel_desempenio']; ?></td>
<td><?php echo $row['anio']; ?></td>
<td><?php echo $row['fecha_evaluacion']; ?></td>

</tr>

 <?php

}


}
  ?>  

</table>
  


    </div>


  </div>
</div>
</body>
</html>
