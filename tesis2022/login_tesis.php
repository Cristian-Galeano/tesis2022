<!DOCTYPE html>

<html lang="es-la">
<head>
<meta charset="utf-8">
<title>Login Escribania Gauto</title>
<link rel="stylesheet" href="css/login2.css">

</head>
<body >
    

    <div class="container">
    <!-- code here -->
    <div class="card">
        <div class="card-image">    
            <h2 class="card-heading">
                Escribania Gauto <br>
                <small>Iniciar Sesion</small>
            </h2>
        </div>
        <form class="card-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" >
            <div class="input">
                <input type="text" class="input-field" name="username" placeholder="Usuario" required/>
                <label class="input-label"></label>
            </div>
            <div class="input">
                <input type="password" class="input-field" name="password" placeholder="Contraseña" required/>
                <label class="input-label"></label>
            </div>
            <div class="action">
                <button class="action-button">Acceder</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>


<?php
require('controlador\retornar_consulta.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $usuario = $_POST['username'];
    $clave = $_POST['password'];

    $consulta = "select * from usuario where username = '$usuario' and password = '$clave';";
    $resultado = consultar($consulta);
    if($resultado=="No encontrado"){
        echo "Usuario o password incorrectos.";
    }else {
        //$_SESSION['usuario'] = $resultado['username'];
        //date_default_timezone_set('America/Argentina/Buenos_Aires');
        //$date = date('l/F/Y  H:i A', time());
        //echo "<script align='center'> alert('BIENVENIDO!! Accediste como: $usuario .  El: $date');
          //  </script>";
        header('Refresh: 1; URL = index2.php');
    } 
}
?>