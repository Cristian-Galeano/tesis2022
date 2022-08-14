<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtCi"]) || empty($_POST["txtDireccion"]) || empty($_POST["txtNacionalidad"]) || empty($_POST["txtRuc"]) || empty($_POST["txtEstado"]) || empty($_POST["txtTelefono"]) || empty($_POST["txtEmail"]) || empty($_POST["txtObservacion"])){
        header('Location: insertar_cliente.php?mensaje=falta');
        exit();
    }

    include_once 'controlador/retornar_conexion.php';
    $nombre = $_POST["txtNombre"];
    $ci = $_POST["txtCi"];
    $direccion = $_POST["txtDireccion"];
    $nacionalidad = $_POST["txtNacionalidad"];
    $ruc = $_POST["txtRuc"];
    $estado_civil = $_POST["txtEstado"];
    $telefono = $_POST["txtTelefono"];
    $correo = $_POST["txtEmail"];
    $observacion = $_POST["txtObservacion"];
    $sentencia = $bd->prepare("INSERT INTO cliente(nombre,ci,direccion,nacionalidad,ruc,estado_civil,telefono,correo,observacion) VALUES (?,?,?,?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$nombre,$ci,$direccion,$nacionalidad,$ruc,$estado_civil,$telefono,$correo,$observacion]);

    if ($resultado === TRUE) {
        header('Location: insertar_cliente.php?mensaje=registrado');
    } else {
        header('Location: insertar_cliente.php?mensaje=error');
        exit();
    }
    
?>