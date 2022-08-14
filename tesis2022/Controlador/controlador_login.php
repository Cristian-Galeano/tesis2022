<?php
session_start();

if (!empty($_POST["btningresar"])){
    if(!empty($_POST["username"]) and !empty($_POST["password"])){
        $usuario=$_POST["username"];
        $password=$_POST["password"];
        $sql=$conexion->query("select * from usuario where username = '$usuario' and password = '$password'");
    if ($datos=$sql->fetch_object()) {
        $_SESSION["id"]=$datos->id;
        $_SESSION["nombre"]=$datos->nombre;
        header('Refresh: 1; URL = index2.php');
    } else {
        echo "Usuario o password incorrectos.";
    }
    }
}
?>