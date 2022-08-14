<?php
    print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: index2.php?mensaje=error');
    }

    include 'controlador/retornar_conexion.php';
    $id = $_POST['id'];
    $nombre = $_POST["txtNombre"];
    $ci = $_POST["txtCi"];
    $direccion = $_POST["txtDireccion"];
    $nacionalidad = $_POST["txtNacionalidad"];
    $ruc = $_POST["txtRuc"];
    $estado_civil = $_POST["txtEstado"];
    $telefono = $_POST["txtTelefono"];
    $correo = $_POST["txtEmail"];
    $observacion = $_POST["txtObservacion"];

    $sentencia = $bd->prepare("UPDATE cliente SET nombre = ?, ci = ?, direccion = ?, nacionalidad = ?, ruc = ?, estado_civil = ?, telefono = ?, correo = ?, observacion = ? where id = ?;");
    $resultado = $sentencia->execute([$nombre, $ci, $direccion,$nacionalidad, $ruc, $estado_civil,$telefono, $correo, $observacion, $id]);

    if ($resultado === TRUE) {
        header('Location: index2.php?mensaje=editado');
    } else {
        header('Location: index2.php?mensaje=error');
        exit();
    }
    
?>