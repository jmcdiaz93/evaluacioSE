<?php
  
  require 'conexion.php';

 


  $idmeta = $_POST['id_meta'];
  


  
  $query = "DELETE FROM metas WHERE id_meta = '$idmeta' ";



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
        
             <center><h2>Borrar metas registradas 2021-2022</h2></center>
        
           </header>
          
              




 <hr class="red">
             
            
      

      <div class="container">
      <br>
      <p><center><h4>
        

          <?php

          if ($resultado>0) {
            

          
                  echo "Se han borrado las metas 2021-2022" ;

                }else{

                  echo "Error al borrar metas" ;

                }


          ?>






      </h4></center></p>
      </div>




     
      </div>
     


    
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


