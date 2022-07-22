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

          
           <header>
        
             <center><h2>Cambio de evaluadores</h2></center>
        
           </header>
          
              




 <hr class="red">
 <div class="container marketing">

     
<div class="container">   
 

      <form action="cambioev1.php" method="POST"> 

        


            <div class="col-sm-9">


            <table class="table table-striped">
              <tbody>

                                
                
                <tr>
                  <th scope="row">IDE DEL EVALUADO</th>
                   <td><input type="text" class="form-control" id="no_evaluado" name="no_evaluado" class="form-control"  required></td>
                  
                </tr>
                
                <tr>
                  <th scope="row">RFC PRIMER EVALUADOR</th>
                   <td><input type="text" class="form-control" id="rfc_superior" name="rfc_superior" class="form-control" maxlength="13" required> </td>
                  
                </tr>
                <tr>
                  <th scope="row">RFC SEGUNDO EVALUADOR</th>
                    <td><input type="text" class="form-control" id="rfc_tercer" name="rfc_tercer" class="form-control" maxlength="13" required> </td>
                  
                </tr>
                 <tr>
                 


                 </tbody>
            </table>

            </div>

            <br>
            <br>

          <div class="col-sm-12">

           <center> <button class="btn btn-danger">Cambiar evaluadores</button> </center>

          </div>


            </form>





      </div>


      
     </div>
    
  <br>
  <br>



    

     





  <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
    <script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>
    </body>
</html>
