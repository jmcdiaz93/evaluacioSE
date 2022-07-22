<?php
  

  session_start();
  require 'conexion.php';

  if (!isset($_SESSION["id_usuario"])) {
    header("Location:index.php");

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
 <div class="container marketing">

     
<div class="container">

  <form action="borrarmetasindi1.php" method="POST">  
  <div class="col-sm-12 col-md-12">
      
      <br>

      
    
     
           
           <div class="col-sm-4 col-md-4">
             
             <h5>Selecciona al servidor p&uacute;blico</h5>
           </div>

          
             <div class="col-sm-5 col-md-5">

             <select class="form-control" placeholder="selecciona" id="id_meta" name="id_meta" >
           <option>--------------------------------</option>      

           <?php

          require ('conexion.php');

          $query = "SELECT a.id_usuario,a.id_meta, b.apellido_paterno,b.apellido_materno,b.nombre FROM metas a INNER JOIN usuarios b WHERE a.id_usuario=b.id_usuario AND anio='2022'";
          

          if ($resultado =$mysqli->query($query))   

                  {

                    while($row=$resultado->fetch_assoc()) 

                    {

                    ?>

                 <option value=" <?php echo $row['id_meta'];?>"> <?php echo ($row['apellido_paterno']) ," ", ($row['apellido_materno']), " ", ($row['nombre']) ; ?></option>

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





            
           <center> <button class="btn btn-danger">Borrar metas </button> </center>
            </form>


      </div>


      
     </div>
    
  <br>
  <br>



    

     





  <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
    <script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>
    </body>
</html>
