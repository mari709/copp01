<!---- Verificamos que el usuario esta logeado al sistema  ---->
<?php
session_name("loginUsuario"); 
session_start();

include_once("metodosDePHP.php");
Seguridad::integridadSistema();
Seguridad::testSeguridad();


# Esta prueba funciona ....
//if($_SESSION["autentificado"] != "Si"){
	//header ("Location: https://drama.fandom.com/es/wiki/Death_note:_L_Change_the_world");
//}

?>
<!--------------------------------------------------------------->

        <?php include("php/vistas/superior.php"); ?>
            
        <!--INICIO CONTENIDO PRINCIPAL-->
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

        <?php include_once("php/vistas/inferior.php"); ?>
