<?php
session_name("loginUsuario"); 
session_start();

include_once("metodosDePHP.php");
Seguridad::integridadSistema();
//Seguridad::testSeguridad();
?>
<?php $title = "Elegir productos - Nota pedido";
	require ('../baseDeDatos/conexion.php');
    include("vistas/superior.php");
    include("../baseDeDatos/consultaFamilia.php") ?>
            
            <!-- INICIO CONTENIDO PRINCIPAL -->
            <main>
                <div class="container-fluid">  
                    <div class="mt-4">              
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Crear nota pedido</li>
                        </ol>
                    </div>
                    <div id="cardProd" class="card mb-4">
                        <div class="card-header">
                            <h5>2. Elegir producto</h5>
                        </div>
                        <div id="cardbodyProd" class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-auto">
                                <form id="combo" name="combo" action="../baseDeDatos/insert_detalle.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="font-weight-bold">Selecciona Familia</label>
                                            <select class="form-control" name= "select-familia" id="select-familia">
                                                <option value="0">Familia</option>
                                                <?php while($row = $resultado->fetch_assoc()) { ?>
                                                <option value="<?php echo $row['idfamilia']; ?>">
                                                <?php echo $row['familia']; ?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="font-weight-bold">Selecciona Producto</label>
                                            <select class="form-control" name="select-productos" id="select-productos">
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <input class="form-control" type="text" name = "last" disabled value = <?php echo $numero?> />
                                            <input class=" form-control btn btn-primary" type="submit" id="enviar" name="enviar" value="Guardar" />
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>

                            <div id="divTablaProd" class="table table-responsive">
                            <h6>Seleccionar producto</h6>

                            </div> <!-- fin divTablaProd -->
                            <div class="container-fluid" style=" background-color: #f8f9fa"> 
                                <table class="table table-responsive" cellspacing="0"> <!-- esto se hace con tabla o con form? -->
                                    <thead>
                                        <tr>
                                            <th>$ Unidad</th>
                                            <th>Cantidad</th>
                                            <th>Descuento %</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>   
                                    <tbody>
                                        <tr>
                                            <td>11593</td>
                                            <td><input type="number" id="cantidadprod" name="cantidadprod" value="1" min="0" max="999"></td>
                                            <td><input type="number" id="cantidadprod" name="cantidadprod" value="0" min="0" max="999"></td>
                                            <td>7303</td>
                                        </tr>
                                    </tbody> 
                                </table>
                                <div class="row">
                                    <div class="col-sm p-3"><button class="btn btn-primary" id="apaso3">Confirmar</button></div>
                                </div>
                            </div>
                        </div> <!-- fin cardbodyProd -->
                    </div> <!-- fin cardProd -->
                </div> <!-- fin class container-fluid -->
            </main>

    <?php include_once("vistas/footer.php"); ?>
    <?php include_once("vistas/scripts.php"); ?>
    <script src="js/notapedido.js"></script>
    </body>
</html>
