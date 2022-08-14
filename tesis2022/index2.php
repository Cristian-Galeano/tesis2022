
<?php
    include_once "controlador/retornar_conexion.php";
    $sentencia = $bd -> query("select * from cliente");
    $cliente = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
   <link rel="stylesheet" href="css/estilo.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <title>Escribania Gauto</title>

   <!-- script de jquery para la redimension entre paginas --> 
    <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>

    <script>
            $(document).ready(function(){
                $('#').click(function(){
                $("#contenido").load("#");
                                             });

                $('#cliente').click(function(){
                $("#contenido").load("index.php");
                                             });

                $('#nuevo_cliente').click(function(){
                $("#contenido").load("insertar_cliente.php");
                                             });

                                        });
        </script>
</head>

<body>

   <div class="d-flex" id="content-wrapper">

        <!-- Sidebar -->
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <h4 class="text-light font-weight-bold mb-0">Escribania Gauto</h4>
            </div>
            <div class="menu">
                <a href="index2.php"  class="d-block text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i>
                    Inicio</a>

                <a href="#" id="cliente" class="d-block text-light p-3 border-0"><i class="icon ion-md-people lead mr-2"></i>
                    Registro Clientes</a>

                <a href="#" id="nuevo_cliente" class="d-block text-light p-3 border-0"><i class="icon ion-md-person mr-2"></i>
                    Nuevo Cliente</a>
                <a href="#" class="d-block text-light p-3 border-0"><i class="icon ion-md-document mr-2"></i>
                    Documentos</a>
                <a href="#" class="d-block text-light p-3 border-0"> <i class="icon ion-md-settings lead mr-2"></i>
                    Configuración</a><br><br><br><br><br><br><br><br><br><br>
                <a href="login_tesis.php" class="d-block text-light p-3 border-0"> <i class="icon ion-md-power lead mr-2"></i>
                    Cerrar Sesion</a>
            </div>
        </div>
        <!-- Fin sidebar -->

        <div class="w-100">

         <!-- Navbar -->
         <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container">
    
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline position-relative d-inline-block my-2">
                  <input class="form-control" type="search" placeholder="Buscar" aria-label="Buscar">
                  <button class="btn position-absolute btn-search" type="submit"><i class="icon ion-md-search"></i></button>
                </form>
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item dropdown">
                    <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cristian Galeano</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Mi perfil</a>
                      <a class="dropdown-item" href="#">Suscripciones</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Cerrar sesión</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- Fin Navbar -->
          <table>
            <tr>
                <td class="w-100" id ="contenido">
                <td >
                </td>
            </tr>
        </table>
        </div>
    </div> 
    </div>
</body>

</html>