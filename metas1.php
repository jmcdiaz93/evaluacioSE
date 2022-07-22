<?php
  

  session_start();
  require 'conexion.php';

  if (!isset($_SESSION["id_usuario"])) {
    header("Location:index.php");

  }


  $idusuario = $_SESSION['id_usuario'];


  $sql = "SELECT  apellido_paterno,apellido_materno,nombre,puesto,ur,nivel FROM usuarios WHERE id_usuario = '$idusuario' ";



  $result = $mysqli->query($sql);

  $row = $result->fetch_assoc();

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
        

           <header>
          <hr class="featurette-divider">
             <center><h2>Evaluaci&oacute;n de Desempe&ntilde;o de Nivel Operativo</h2></center>
          <hr class="featurette-divider">
           </header>
           <br>
            <div class="col-xs-1"></div>
            <div class="col-xs-10">

              <table  class="table table-striped">
     
             <tbody>
                <tr>
                  <th scope="row">Nombre</th>
                  <td ><?php  echo ($row['nombre']); ?> <?php  echo ($row['apellido_paterno']); ?> <?php  echo ($row['apellido_materno']); ?></td>
                  
                </tr>
                <tr>
                  <th scope="row">Puesto</th>
                  <td><?php  header("Content-Type: text/html;charset=utf-8"); echo ($row['puesto']); ?></td>
                  
                </tr>
                <tr>
                  <th scope="row">Nivel</th>
                  <td><?php echo ($row['nivel']); ?></td>
                  
                </tr>

                <tr>
                  <th scope="row">UR</th>
                  <td><?php echo ($row['ur']); ?></td>
                  
                </tr>
              </tbody>
            </table>
             
        </div>
         
              




 <div class="container marketing">

     
<div class="container">   
  <div class="col-sm-12 col-md-12">

      <form action="registrar1.php" method="POST"> 

        <center><h3>FUNCIONES</h3></center>
        <center><h5>(M&aacute;ximo 150 caracteres)	</h5>	</center>
        <table class="table table-striped">
              <thead>
                <tr>
                  <th align="center" scope="col">No.</th>
                  <th align="center" scope="col">Funci&oacute;n</th>
                 
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
          <center><h5>(M&aacute;ximo 300 caracteres)	</h5>	</center>
          <br>
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
                
                <tr>
                  <th scope="row">RFC PRIMER EVALUADOR</th>
                   <td><input type="text" class="form-control" id="rfc_superior" name="rfc_superior" class="form-control" minlength="13"	 maxlength="13" required> </td>
                  
                </tr>
                <tr>
                  <th scope="row">RFC SEGUNDO EVALUADOR</th>
                    <td><input type="text" class="form-control" id="rfc_tercer" name="rfc_tercer" class="form-control" 
                    minlength="13 maxlength="13" required> </td>
                  
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
