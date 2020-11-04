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
                            <?php include_once("consultar_comercios.php"); ?>
                            <form method="get" action="./crear-nota-pedido-2.php">
                                <button id="apaso2" class="btn btn-primary mt-2" type="submit">Confirmar</button>
                            </form>
                        </div>
                    </div>                   
                </div>
            </main>
    <?php include_once("vistas/footer.php"); ?>
    <?php include_once("vistas/scripts.php"); ?>
    </body>
</html>

