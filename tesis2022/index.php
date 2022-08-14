<?php include 'template/header.php' ?>

<?php
    include_once "controlador/retornar_conexion.php";
    $sentencia = $bd -> query("select * from cliente");
    $cliente = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($cliente);
?>

<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
   <link rel="stylesheet" href="css/estilo.css">




<div class="container mt-3">
    <div class="row justify-content-center">
        <div>
            <!-- inicio alerta -->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Rellena todos los campos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>  
            
            

            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Vuelve a intentar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   



            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Cambiado!</strong> Los datos fueron actualizados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Eliminado!</strong> Los datos fueron borrados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 

            <!-- fin alerta -->
            <div >
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a>Lista Clientes</a>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Buscar Cliente" aria-label="Buscar">
                            <button class="btn btn-outline-success col-md-3 me-1" type="submit">Buscar</button>
                            <button class="btn btn-outline-success col-md-4" type="submit">Nuevo Registro</button>
                        </form>
                    </div>
                </nav>
                <div class="p-1">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">C.I Nº</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Nacionalidad</th>
                                <th scope="col">R.U.C Nº</th>
                                <th scope="col">Estado Civil</th>
                                <th scope="col">Telefono</th> 
                                <th scope="col">E-mail</th>
                                <th scope="col">Observacion</th>
                                <th scope="col" colspan="10">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                foreach($cliente as $dato){ 
                            ?>

                            <tr>
                                <td scope="row"><?php echo $dato->id; ?></td>
                                <td><?php echo $dato->nombre; ?></td>
                                <td><?php echo $dato->ci; ?></td>
                                <td><?php echo $dato->direccion; ?></td>
                                <td><?php echo $dato->nacionalidad; ?></td>
                                <td><?php echo $dato->ruc; ?></td>
                                <td><?php echo $dato->estado_civil; ?></td>
                                <td><?php echo $dato->telefono; ?></td>
                                <td><?php echo $dato->correo; ?></td>
                                <td><?php echo $dato->observacion; ?></td>
                                <td><a class="text-success" href="editar.php?id=<?php echo $dato->id; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminar.php?id=<?php echo $dato->id; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>

                            <?php 
                                }
                            ?>

                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
   </div>
</div> 
