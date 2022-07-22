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

         
          
        
             <center><h2>Cambio de evaluadores</h2></center>
        
           </header>
          
              




 <hr class="red">
 <div class="container marketing">

     
<div class="container">

  <form action="cambiareva1.php" method="POST"> 
  <div class="col-sm-12 col-md-12">
      
      <br>

      
    
     
        
           <div class="col-sm-4 col-md-4">
             
             <h5>Selecciona al servidor p&uacute;blico</h5>
           </div>

          
             <div class="col-sm-5 col-md-5">

             <select class="form-control"  id="id_usuario" name="id_usuario" required>
             <option>  </option> 

           <?php

          require ('conexion.php');

          $query = "SELECT id_usuario,apellido_paterno,apellido_materno,nombre FROM usuarios  WHERE tipo_usuario='evaluado' ORDER BY apellido_paterno, apellido_materno ASC";
          

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

             <div class="col-sm-4 col-md-4">
             
             <h5>Selecciona al superior jerarquico</h5>
           </div>

          
             <div class="col-sm-5 col-md-5">

             <select class="form-control"  id="rfc_superior" name="rfc_superior" required>
             <option>  </option> 
           <?php

          require ('conexion.php');

          $query1 = "SELECT usuario,apellido_paterno,apellido_materno,nombre FROM usuarios  WHERE tipo_usuario= '' ORDER BY apellido_paterno, apellido_materno ASC";
          

          if ($resultado1 =$mysqli->query($query1))   

                  {

                    while($row1=$resultado1->fetch_assoc()) 

                    {

                    ?>

                 <option value=" <?php echo $row1['usuario'];?>"> <?php echo ($row1['apellido_paterno']) ," ", ($row1['apellido_materno']), " ", ($row1['nombre']) ; ?></option>

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
            <div class="col-sm-4 col-md-4">
             
             <h5>Selecciona al tercer evaluador</h5>
           </div>

          
             <div class="col-sm-5 col-md-5">

             <select class="form-control" placeholder="selecciona" id="rfc_tercer" name="rfc_tercer" required>
           <option>  </option>      

           <?php

          require ('conexion.php');

          $query2 = "SELECT usuario,apellido_paterno,apellido_materno,nombre FROM usuarios  WHERE tipo_usuario= '' ORDER BY apellido_paterno, apellido_materno ASC";
          

          if ($resultado2 =$mysqli->query($query2))   

                  {

                    while($row2=$resultado2->fetch_assoc()) 

                    {

                    ?>

                 <option value=" <?php echo $row2['usuario'];?>"> <?php echo ($row2['apellido_paterno']) ," ", ($row2['apellido_materno']), " ", ($row2['nombre']) ; ?></option>

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



            
            <center> <button class="btn btn-danger">Cambiar evaluadores</button> </center>

           
            </form>
           

          
      </div>
      

      
     </div>

     <br>
     <br>
      
     
    <br>
    <br>
    <br>
  

    <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
    <script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>
    </body>
    </html>
