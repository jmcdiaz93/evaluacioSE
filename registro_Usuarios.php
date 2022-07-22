<?php
require ('conexion.php');
session_start();
$idusuario = $_SESSION['id_usuario'];
$sql = "SELECT  * FROM usuarios WHERE id_usuario = '$idusuario' ";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Registro de Usuarios</title>


    <!-- Bootstrap core CSS -->
    <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <br>

    <div class="col-xs-1"></div>

    <img src="imagenes/logoeconomia.jpg">
</head>

<body>
    <div class="container mt-5">
        <h1>Registro de Usuarios</h1>
        <div class=row>
            <div class="col-md-12" align="left">
                <form action="form-group">
                    <div class="col-md-12" align="left">
                        <span class="glyphicon glyphicon-home font-black-color"></span>
                        <hr class="red" />
                    </div>
                </form>
            </div>

        </div>
        <div class=row>
            <div class="col-md-12" align="center">
                <form action="form-group">
                    <div class="col-md-12" align="center">
                        <h4>Administrador</h4>

                    </div>
                </form>
            </div>

        </div>
        <?php 

require ('conexion.php');

if (isset($_POST['siguiente'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellidoP']) >= 1 && strlen($_POST['apellidoM']) >= 1 
    && strlen($_POST['correo']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['passwordc']) >= 1 && strlen($_POST['credencial']) >= 1) {
	    $nombre = trim($_POST['nombre']);
        $apellidoP=trim($_POST['apellidoP']);
        $apellidoM=trim($_POST['apellidoM']);
        $correo = trim($_POST['correo']);
         $contrasenia=  trim($_POST['password']);    
        $credencial=trim($_POST['credencial']);
	    $fechareg = date("d/m/y");
        $_POST['fecha_registro'] = $fechareg;
	    $consulta = "INSERT INTO logeo (nombre, apellido_paterno, apellido_materno,correo,contrasenia,credencial,fecha_registro) VALUES ('$nombre',' $apellidoP',' $apellidoM','$correo',
        ' $contrasenia',' $credencial','$fechareg')";
	    $guardar=$mysqli->query($consulta);
	   // Declare variable and store it to email
       $correo  = "author.gfg@GeeksforGeeks.com";
  
// Remove all illegal characters from email
$correo  = filter_var( $correo , FILTER_SANITIZE_EMAIL);
  
// Validate Email
if (filter_var( $correo , FILTER_VALIDATE_EMAIL)) {
    echo(" $correo  is a valid email address");
} 
else {
    echo("$email is not a valid email address");
}
  
    }   
}

?>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" align="center">
                <form class="form-horizontal" method="POST">
                    <div class="alert alert-inf">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nombre</label>
                            <div class="col-sm-9">
                                <input type="text" maxlength="13" class="form-control" placeholder="Nombre  "
                                    id="nombre" name="nombre" required>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Apellido Paterno</label>
                            <div class="col-sm-9">
                                <input type="text" maxlength="13" class="form-control" placeholder="Apellido Paterno"
                                    id="apellidoP" name="apellidoP" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Apellido Materno</label>
                            <div class="col-sm-9">
                                <input type="text" maxlength="13" class="form-control" placeholder="Apellido Materno"
                                    id="apellidoM" name="apellidoM" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="email-03">Correo</label>
                            <div class="col-sm-9">
                                <input type="text" maxlength="30" class="form-control" placeholder="Correo  "
                                    id="usuario" name="correo" required>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="password-03"> Nueva
                                Contraseña:</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="password" placeholder="Nueva Contraseña" type="password"
                                    name="password">

                            </div>

                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="passwordc-03"> Confirma
                                Contraseña:</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="passwordc" placeholder="Confirma Contraseña"
                                    type="password" name="passwordc">

                            </div>

                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="password-03">Numero
                                credencial:</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="credencial" placeholder="Credencial" type="text"
                                    name="credencial">

                            </div>
                        </div>
                        <div class="form-group">

                        </div>
                        <div class="form-group">
                            <div class="col-sm-6"></div>
                            <div class="col-sm-3">
                                <button class="btn btn-danger pull-right" type="submit">Cancelar</button>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-primary pull-right" type="submit"
                                    name="siguiente">Siguiente</button>
                            </div>



                </form>
            </div>
        </div>

        <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
        <script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>
    </div>
</body>

</html>