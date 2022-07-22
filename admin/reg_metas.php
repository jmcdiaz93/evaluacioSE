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
        
             <center><h2>Registrar metas</h2></center>
        
           </header>
          
              




 <hr class="red">
 <div class="container marketing">

     
<div class="container">   
  <div class="col-sm-12 col-md-12">

      <form action="reg_metas1.php" method="POST"> 

        <center><h3>FUNCIONES</h3></center>
        <table class="table table-striped">
              <thead>
                <tr>
                  <th align="center" scope="col">No.</th>
                  <th align="center" scope="col">Funcion</th>
                 
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                   <td><input type="text" class="form-control" id="funcion1" name="funcion1" class="form-control" maxlength="150"> </td>
                  
                </tr>
                <tr>
                  <th scope="row">2</th>
                   <td><input type="text" class="form-control" id="funcion2" name="funcion2" class="form-control" maxlength="150"> </td>
                  
                </tr>
                <tr>
                  <th scope="row">3</th>
                    <td><input type="text" class="form-control" id="funcion2" name="funcion3" class="form-control" maxlength="150"> </td>
                  
                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td><input type="text" class="form-control" id="funcion4" name="funcion4" class="form-control" maxlength="150"> </td>
                  
                </tr>

              </tbody>
            </table>

         <br>
        
         <br>

          

         <hr class="red">
          <center><h5>Meta 1
          </h5></center>
            
        <table class="table table-striped">

              <tbody>
                <tr>
                  
                    <td><textarea class="form-control" id="meta1" name="meta1" rows="3" maxlength="300"></textarea> </td>
                  
                </tr>

                 </tbody>
            </table>
            
            

            <!-- Meta2 -->

            <hr class="red">
                <center><h5>Meta 2
              </h5></center>

            <table class="table table-striped">

              <tbody>
                <tr>
                  
                  <td><textarea class="form-control" id="meta2" name="meta2" rows="3" maxlength="300"></textarea> </td>
                  
                </tr>



                 </tbody>
            </table>
            
          

            <!-- Meta3 -->

            <hr class="red">
                <center><h5>Meta 3
              </h5></center>

            <table class="table table-striped">

              <tbody>
                <tr>
                  
                 <td><textarea class="form-control" id="meta3" name="meta3" rows="3" maxlength="300"></textarea> </td>

                  
                </tr>


                 </tbody>
            </table>
            
            
            <!-- Meta 4 -->

            <hr class="red">
                <center><h5>Meta 4
              </h5></center>

            <table class="table table-striped">

              <tbody>
                <tr>
                  
                  <td><textarea class="form-control" id="meta4" name="meta4" rows="3" maxlength="300"></textarea> </td>
                  
                </tr>


                 </tbody>
            </table>


            <div class="col-sm-9">


            <table class="table table-striped">
              <tbody>

                 <th scope="row">NO. REGISTRO</th>
                    <td><input type="text" class="form-control" id="no_reg" name="no_reg" class="form-control" maxlength="4" required> </td>
                  
                </tr>
                <tr>
                  <th scope="row">IDE</th>
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

           <center> <button class="btn btn-danger">Registrar metas</button> </center>

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
