<?php
function conectar(){
	$conexion = mysqli_connect('127.0.0.1', 'root', '', 'tesis2022');
	$conexion->set_charset("utf8");
	if (mysqli_connect_errno($conexion)){
		echo "Falló la conexion: " . mysqli_connect_error();
		return null;
	} else {
		return $conexion;
	}
}
 
$contrasena = "";
$usuario = "root";
$nombre_bd = "tesis2022";

try {
	$bd = new PDO (
		'mysql:host=localhost;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>

