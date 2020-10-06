<!---- Verificamos que el usuario esta logeado al sistema  ---->
<?php
session_name("loginUsuario"); 
session_start();

include_once("metodosDePHP.php");
Seguridad::testSeguridad();
Seguridad::integridadSistema();

# Esta prueba funciona ....
//if($_SESSION["autentificado"] != "Si"){
	//header ("Location: https://drama.fandom.com/es/wiki/Death_note:_L_Change_the_world");
//}

?>
<!--------------------------------------------------------------->


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Principal</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>


<!----Inicio "body" -->    
<body class="sb-nav-fixed">
        
        <!-- NAVBAR -->
        <?php include("php/includes/navbar.php"); ?>

        <div id="layoutSidenav">

        <!-- INICIO DE SIDEBAR -->
        <?php include("php/includes/sidebar.php"); ?>
            
        
            <!--INICIO CONTENIDO PRINCIPAL-->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Principal</h1>
                       <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Principal</li>
                        </ol> -->
                        <div class="row">
                            <div class="col-xl-3 col-md-6 col-6 ">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Nota pedido</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Crear</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Usuarios</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Administrar</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <h2>Responde a las solicitudes de pedidos</h2>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Fecha</th>
                                                <th>Lista</th>
                                                <th>Descuento 1</th>
                                                <th>Descuento 2</th>
                                                <th>Subtotal 1</th>
                                                <th>Subtotal2</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Fecha</th>
                                                <th>Lista</th>
                                                <th>Descuento 1</th>
                                                <th>Descuento 2</th>
                                                <th>Subtotal 1</th>
                                                <th>Subtotal2</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>2020/10/14</td>
                                                <td>228</td>
                                                <td>0.00</td>
                                                <td>0.00</td>
                                                <td>$5680</td>
                                                <td>0.00</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
        <!-- FOOTER -->
            <?php include("php/includes/footer.php"); ?>
        <!--//FIN FOOTER -->

        
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
