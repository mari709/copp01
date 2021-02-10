<?php
session_name("loginUsuario"); 
session_start();

include_once("metodosDePHP.php");
Seguridad::integridadSistema();
//Seguridad::testSeguridad();
?>
<?php $title = "Elegir productos - Nota pedido";
	//require ('../baseDeDatos/conexion.php');
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
                                        <div id="col-fam-pro" class="row">
                                            <div class="col-md-6">
                                                <label class="font-weight-bold">Familia de producto</label>
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
                                                <label class="font-weight-bold">Producto</label>
                                                <select class="form-control" name="select-productos" id="select-productos">
                                                </select>
                                            </div>
                                        </div> <!-- fin div id col-fam-pro -->
                                        <div id="divTablaProd" class="table table-responsive pt-4">
                                            <table class="table table-responsive" cellspacing="0">
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
                                                      <td><span id = "valueshow"></span></td>
<!--
                                                        <td><label id = "valueshow"></label></td>
    -->                                                    
                                                        <td><input type="number" id="cantidadprod" name="cantidadprod" value="1" min="0" max="999"></td>
                                                        <td><input type="number" id="descuento-por-producto" name="descuento-por-producto" value="10" min="0" max="100"></td>
                                                        <td><span id = "respuesta"></span></td>
                                                    </tr>
                                                </tbody> 
                                            </table>
                                        </div> <!-- fin div id divTablaProd  -->
                                            <div class="col-md-4">
                                                <input class="form-control" type="text" name = "last" hidden value = <?php echo $numero?> />
                                                <input class=" form-control btn btn-primary" type="submit" id="enviar" name="enviar" value="Guardar" />
                                            </div>
                                    </form> <!-- fin form combo -->
                                </div>
                            </div>
                        </div> <!-- fin cardbodyProd -->
                    </div> <!-- fin cardProd -->
                </div> <!-- fin container-fluid -->
            </main>

    <?php include_once("vistas/footer.php"); ?>
    <?php include_once("vistas/scripts.php"); ?>
    <script src="js/notapedido.js"></script>

    <script>
    $(document).on('keyup','#cantidadprod', function(){
    var valor2 = $('#descuento-por-producto').val();
    var valor3 = $('#cantidadprod').val();
    realizaProceso(valor2,valor3);
   
    console.log(valor2);
    console.log(valor3);
});

function realizaProceso(valor2,valor3){
    var valores = {
            "valorCaja2" : valor2,
            "valorCaja3" : valor3
    };

      console.log(valores.valorCaja2);
      console.log(valores.valorCaja3);
      
    $.ajax({
            data:  valores, //datos que se envian a traves de ajax
            url:   'calculos.php', //archivo que recibe la peticion
            type:  'post', //método de envio
            beforeSend: function () {
                    $("#respuesta").html("Procesando, espere por favor...");
            },
            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    $("#respuesta").html(response);
            }
    });    


   
    
}





    </script>
    </body>
</html>
