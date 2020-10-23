<?php $title = "Elegir productos - Nota pedido";
    include("vistas/superior.php"); ?>
            
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
                                    <h6>Ver tipo de producto</h6>
                                </div>
                                <div class="col-md-auto">
                                    <form>
                                        <select name="selectTipo"> <!-- class="custom-select" size="3" -->
                                            <option value="Todos" selected>Todos</option> 
                                            <option value="Calefactor">Calefactor</option> 
                                            <option value="Termotanque" >Termotanque</option>
                                            <option value="Caldera">Caldera</option>
                                            <option value="Repuesto">Repuesto</option>
                                            <option value="Otros">Otros</option>
                                        </select>
                                    </form>
                                </div>
                            </div>






                            <div id="divTablaProd" class="table table-responsive">
                                <table data-page-length='5' class="table table-bordered" id="tablaproductos" width="100%" cellspacing="0">
                                    <thead>Seleccionar producto
                                        <tr>
                                            <th>id</th>
                                            <th>Código</th>
                                            <th>Producto</th>
                                            <th>Tipo de producto</th>
                                            <th>Familia</th>
                                            <th>Marca (Cla 1)</th>
                                            <th>Energia (Cla 2)</th>
                                            <th>(Cla 3)</th>
                                            <th>m3</th>
                                            <th>Segmento</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>7</td>
                                            <td>TTQE65CO</td>
                                            <td>65 LTS ELECTRICO</td>
                                            <td>Termotanque</td>
                                            <td>Electrico</td>
                                            <td>Coppens</td>
                                            <td>Electrico</td>
                                            <td></td>
                                            <td>0.150</td>
                                            <td>0.150</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>TTQE65CO</td>
                                            <td>65 LTS ELECTRICO</td>
                                            <td>Termotanque</td>
                                            <td>Electrico</td>
                                            <td>Coppens</td>
                                            <td>Electrico</td>
                                            <td></td>
                                            <td>0.150</td>
                                            <td>0.150</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>TTQE65CO</td>
                                            <td>65 LTS ELECTRICO</td>
                                            <td>Termotanque</td>
                                            <td>Electrico</td>
                                            <td>Coppens</td>
                                            <td>Electrico</td>
                                            <td></td>
                                            <td>0.150</td>
                                            <td>0.150</td>
                                        </tr>
                                    </tbody> 
                                </table>
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
                                            <td>30</td>
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

    </body>
</html>
