<?php include 'template/header.php' ?>

<?php
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'controlador/retornar_conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("select * from cliente where id = ?;");
    $sentencia->execute([$id]);
    $cliente = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($cliente);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" required 
                        value="<?php echo $cliente->nombre; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">C.I Nº: </label>
                        <input type="text" class="form-control" name="txtCi" autofocus required
                        value="<?php echo $cliente->ci; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Direccion: </label>
                        <input type="text" class="form-control" name="txtDireccion" autofocus required
                        value="<?php echo $cliente->direccion; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nacionalidad: </label>
                        <input type="text" class="form-control" name="txtNacionalidad" autofocus required
                        value="<?php echo $cliente->nacionalidad; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">R.U.C Nº: </label>
                        <input type="text" class="form-control" name="txtRuc" autofocus required
                        value="<?php echo $cliente->ruc; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Estado Civil: </label>
                        <input type="text" class="form-control" name="txtEstado" autofocus required
                        value="<?php echo $cliente->estado_civil; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefono: </label>
                        <input type="text" class="form-control" name="txtTelefono" autofocus required
                        value="<?php echo $cliente->telefono; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">E-mail: </label>
                        <input type="text" class="form-control" name="txtEmail" autofocus required
                        value="<?php echo $cliente->correo; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Observacion: </label>
                        <input type="text" class="form-control" name="txtObservacion" autofocus required
                        value="<?php echo $cliente->observacion; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="id" value="<?php echo $cliente->id; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
