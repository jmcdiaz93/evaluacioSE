<?php

require('conexion.php');

session_start();

  if (!empty($_POST)) 
    {
      
      $usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']);
      $password = mysqli_real_escape_string($mysqli,$_POST['password']);
      $error = '';


      $sql = "SELECT id_usuario FROM usuarios WHERE usuario = '$usuario' AND password = '$password' AND tipo_usuario = 'evaluado'  ";
      $result = $mysqli->query($sql);
      $rows = $result->num_rows;


      if ($rows > 0) {

        $row= $result->fetch_assoc();
        $_SESSION['id_usuario'] = $row['id_usuario'];

        header("Location:metas0.php");
        }else{

          $error = "El nombre o contrase&ntilde;a son incorrectos";
        }



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
  




        
        
          <header>
          <hr class="featurette-divider">
             <center><h1>Evaluaci&oacute;n de Desempe&ntilde;o de Nivel Operativo</h1></center>
          <hr class="featurette-divider">
           </header>
     
      
      

 

  <body>



  <main class="page">
   <div class="col-xs-3 "></div>

   <center>
            
            <section class="main row">
                   <h2>Registro de metas 2021-2022</h2>

                   <a href="tutorial.ppsx"><h4>Consulta tutorial <span class="glyphicon glyphicon-download"></span></h4></a>
                       <div class="col-xs-3"></div> 

                          <article class="col-xs-7 col-sm-7 col-md-7">



                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="form-horizontal" role="form">

                              
                              
                              <br>
                              <br>

                              <div  class="alert alert-warning">
                              
                              <br>
                              <br>

                              <div class="form-group">
                              <label class="col-sm-3 control-label">RFC Completo</label>

                              <div class="col-sm-5">
                              <input type="text" maxlength="13" class="form-control" placeholder="RFC completo " id="usuario" name="usuario" required autofocus>
                              </div>
                              </div>
                              <div class="form-group">
                              <label class="col-sm-3 control-label" for="password-03">Password</label>


                              <div class="col-sm-5">
                              <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>

                              </div>
                              </div>

                              <br>
                              <div></div>
                              <div class="form-group">
                                    <div align="right" class="col-s-7 col-sm-7">
                                     <button class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Iniciar Sesion</button> 
                                     
                                    </div>
                            </div>

                            



                              <br>



                            <h4><font color="#cc0000"><?php echo isset($error) ? ($error): '';?></font></h4>

                            </div>
                            </form>


                        </article>
                    </section>



  </center>
  </main>


<br>


 <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
 <script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>
</body>
</html>
