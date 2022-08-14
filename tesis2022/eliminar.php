<?php 
    if(!isset($_GET['id'])){
        header('Location: index2.php?mensaje=error');
        exit();
    }

    include 'controlador/retornar_conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("DELETE FROM cliente where id = ?;");
    $resultado = $sentencia->execute([$id]);

    if ($resultado === TRUE) {
        header('Location: index2.php?mensaje=eliminado');
    } else {
        header('Location: index2.php?mensaje=error');
    }
    
?>