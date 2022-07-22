<?php
  
  require 'conexion.php';

 


  $idusuario = $_POST['idusuario'];
  


  
  $query = "DELETE FROM resultados WHERE id_usuario = '$idusuario' AND anio='2021' ";



   $resultado=$mysqli->query($query)



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

          
           <header>
        
             <center><h2>Borrar evaluaci&oacute;n de metas</h2></center>
        
           </header>
          
              




 <hr class="red">
             
             <?php


       if($resultado>0){

       	
        $sql = "SELECT apellido_paterno,apellido_materno,nombre FROM usuarios WHERE id_usuario = '$idusuario' ";

       		$result = $mysqli->query($sql);

           $row = $result->fetch_assoc();


         ?>

      

      <div class="container">
      <br>
      <p><center><h4>Se ha borrado la evaluaci&oacute;n de <?php  echo ($row['nombre']); ?> <?php  echo ($row['apellido_paterno']); ?> <?php  echo ($row['apellido_materno']); ?> </h4></center></p>
      </div>




      <?php }else{ ?>
      </div>
      <div class="container">

      <p><center><h3>Error al borrar evaluaci&oacute;n</h3></center></p>
      </div>


      <?php }?>
      <br>
      <br>
      <br>
      <br>

       <a href="menu.php"><center><button class="btn btn-success">Regresar al men&uacute;</button></center> </a>

       <br>
  
     
    <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
    <script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>
    </body>
    </html>


