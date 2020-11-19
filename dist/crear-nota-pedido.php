<?php
session_name("loginUsuario"); 
session_start();

include_once("metodosDePHP.php");
Seguridad::integridadSistema();
//Seguridad::testSeguridad();
?>
<?php $title = "Crear nota pedido";
    include("vistas/superior.php"); ?>
            
        <!-- INICIO CONTENIDO PRINCIPAL -->
            <main>
                <div class="container-fluid">
                    <div class="mt-4">                
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Crear nota pedido</li>
                        </ol>
                    </div>                  
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>1. Seleccionar comercio</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <?php //include_once("../baseDeDatos/AgregarComercioNP.php"); ?>
                                    <form method="post" action="./enviar-np.php">
                                        <?php include_once("../baseDeDatos/consultar_comercios.php"); ?> 
                                        <br>
                                </div>
                                <div class="col-md-6"> 
                                    <!-- <form method="post" action="./crear-nota-pedido-2.php"> -->
                                        
                                        <button id="apaso2" class="btn btn-primary" type="submit">Confirmar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>                   
                </div>
            </main>
    <?php include_once("vistas/footer.php"); ?>
    <?php include_once("vistas/scripts.php"); ?>
    </body>
</html>

