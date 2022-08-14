
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nuevo Registro</title>
</head>
<body>
<?php
    include_once "controlador/retornar_conexion.php";
    $sentencia = $bd -> query("select * from cliente");
    $cliente = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($cliente);
?>

<?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registrado!</strong> Se agregaron los datos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Ingresar datos:
                </div>
                <form class="p-4" method="POST" action="registrar.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">C.I Nº: </label>
                        <input type="text" class="form-control" name="txtCi" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Direccion: </label>
                        <input type="text" class="form-control" name="txtDireccion" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nacionalidad: </label>
                        <input type="text" class="form-control" name="txtNacionalidad" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">R.U.C Nº: </label>
                        <input type="text" class="form-control" name="txtRuc" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Estado Civil: </label>
                        <input type="text" class="form-control" name="txtEstado" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefono: </label>
                        <input type="text" class="form-control" name="txtTelefono" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">E-mail: </label>
                        <input type="text" class="form-control" name="txtEmail" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Observacion: </label>
                        <input type="text" class="form-control" name="txtObservacion" autofocus required>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
</body>
</html>

 