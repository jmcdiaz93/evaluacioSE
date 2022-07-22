<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename= Resultados_metas.xls");

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

         <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">
      </head>
        <body>
        <div class="container">

          <div align="left">
         
              <br>
              <img  src="imagenes/logoeconomia.jpg">

             </div>

           <header>
        
             <center><h1>Metas Individuales 2021-2022</h1></center>
        
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
        <th>FUNCION 1</th>
        <th>FUNCION 2</th>
        <th>FUNCION 3</th>
        <th>FUNCION 4</th>
        <th>FUNCION 5</th>



        <th>META1</th>
        <th>META2</th>
        <th>META3</th>
        <th>META4</th>
        
        
        <th>RFC SUPERIOR</th>
        <th>RFC TERCER</th>
        <th>A&Ntilde;O</th>

       
        
       </tr>
   

<?php

 require 'conexion.php';


          
               
          
          $query= "SELECT Us.*, Rint.* FROM usuarios Us INNER JOIN metas Rint ON Us.id_usuario= Rint.id_usuario WHERE anio='2022'
          ";




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
<td><?php echo $row['funcion1']; ?></td>
<td><?php echo $row['funcion2']; ?></td>
<td><?php echo $row['funcion3']; ?></td>
<td><?php echo $row['funcion4']; ?></td>
<td><?php echo $row['funcion5']; ?></td>
<td><?php echo $row['meta1']; ?></td>
<td><?php echo $row['meta2']; ?></td>
<td><?php echo $row['meta3']; ?></td>
<td><?php echo $row['meta4']; ?></td>
<td><?php echo $row['rfc_superior']; ?></td>
<td><?php echo $row['rfc_tercer']; ?></td>
<td><?php echo $row['anio']; ?></td>



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
