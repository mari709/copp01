<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo "$title | Coppens";?></title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <link href="css/style-tablas.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>


<!-- Inicio "body" -->    
<body class="sb-nav-fixed">
    
    <!-- NAVBAR -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Coppens</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
                    
            
        <!--Inicio : lista -->
        <ul class="navbar-nav ml-auto">
            <!--Inicio : Elemento #1 -->                
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="./login.php">Cerrar sesión</a>
                </div>
                        
            </li> <!--Fin : Elemento #1 -->
        </ul> <!--Fin : lista -->            
    </nav>
    
    <!-- SIDEBAR -->
    <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Principal
                            </a>
                            <a class="nav-link" href="crear-nota-pedido.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Crear nota pedido
                            </a>
                            <a class="nav-link" href="administrar-usuarios.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Administrar usuarios
                            </a>
                            <a class="nav-link" href="Registro.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Registrar Usuario
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Sesión iniciada como:</div>
                        Mi nombre
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">

