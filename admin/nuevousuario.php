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
        
             <center><h2>Ingresar nuevo servidor p&uacute;blico </h2></center>
        
           </header>
          
              




 <hr class="red">
 <div class="container marketing">

     
<div class="container">   
 

      <form action="nuevousuario1.php" method="POST"> 

        


            <div class="col-sm-9">


            <table class="table table-striped">
              <tbody>
                <tr>
                  <th scope="row">ID DEL USUARIO</th>
                   <td><input type="text" class="form-control" id="id_usuario" name="id_usuario" class="form-control"  required></td>

                </tr>
                <tr>
                   <th scope="row">USUARIO</th>
                   <td><input type="text" class="form-control" id="usuario" name="usuario" class="form-control" maxlength="13" required></td>

                 </tr>
                 <tr>
                   <th scope="row">PASSWORD</th>
                   <td><input type="text" class="form-control" id="password" name="password" class="form-control" maxlength="13" required></td>
                 </tr>
                 <tr>
                   <th scope="row">APELLIDO PATERNO</th>
                   <td><input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" class="form-control"  required></td>
                  </tr>
                  <tr>
                    <th scope="row">APELLIDO MATERNO</th>
                   <td><input type="text" class="form-control" id="apellido_materno" name="apellido_materno" class="form-control"  required></td>
                   </tr>
                   <tr>
                    <th scope="row">NOMBRE</th>
                   <td><input type="text" class="form-control" id="nombre" name="nombre" class="form-control"  required></td>
                   </tr>
                   <tr>
                    <th scope="row">UR</th>
                   <td><input type="text" class="form-control" id="ur" name="ur" class="form-control"  required></td>
                   </tr>
                   <tr>
                    <th scope="row">NIVEL</th>
                   <td><input type="text" class="form-control" id="nivel" name="nivel" class="form-control"  required></td>
                    </tr>
                    <tr>
                     <th scope="row">CURP</th>
                   <td><input type="text" class="form-control" id="curp" name="curp" class="form-control"  required maxlength="18"></td>
                    </tr>
                    <tr>
                   <th scope="row">FECHA DE INICIO</th>
                   <td><input type="text" class="form-control" id="fecha_inicio" name="fecha_inicio" class="form-control"  required></td>
                    </tr>
                    <tr>
                   <th scope="row">PUESTO</th>
                   <td><input type="text" class="form-control" id="puesto" name="puesto" class="form-control"  required></td>
                    </tr>
                    <tr>
                   <th scope="row">TIPO DE USUARIO</th>
                   <td><input type="text" class="form-control" id="tipo" name="tipo" class="form-control"  ></td>

                  
                </tr>
                                
                
               
                
               
                
                 <tr>
                 


                 </tbody>
            </table>

            </div>

            <br>
            <br>

          <div class="col-sm-12">

           <center> <button class="btn btn-danger">Registrar</button> </center>

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
