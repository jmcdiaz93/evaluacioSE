<?php
  
   require 'conexion.php';

  $idusuario = $_POST['id_usuario'];
  $rfc1 = $_POST['rfc_superior'];
  $rfc2 = $_POST['rfc_tercer'];


  
  $actualiza= "UPDATE metas SET rfc_superior='$rfc1', rfc_tercer='$rfc2' WHERE metas.id_usuario= '$idusuario' ";



  $guarda=$mysqli->query($actualiza);




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
        
             <center><h3>Administrador</h3></center>
        
           </header>
           <hr class="red">

           <div class="col-sm-12 col-md-12">
             
             <center><h4>

             


               <?php

          if ($guarda>0) {
            

          
                  echo "Se han modificado los evaluadores" ;

                }else{

                  echo "Error al modificar evaluadores" ;

                }


          ?>


                  </h4>


              </center>
                


     
      <br>

       <a href="menu.php"><center><button class="btn btn-success">Regresar al men&uacute;</button></center> </a>

       <br>
       <br>
  
     </div>
    <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
    <script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>
    </body>
    </html>


