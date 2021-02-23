<?php
session_name("loginUsuario"); 
session_start();
$_SESSION['session_subtotal1'] = 0 ;
$_SESSION['psi'] = 0;

include_once("metodosDePHP.php");
Seguridad::integridadSistema();
//Seguridad::testSeguridad();
?>
<?php $title = "Elegir productos - Nota pedido";
	//require ('../baseDeDatos/conexion.php');
    include("vistas/superior.php");
    include("../baseDeDatos/consultaFamilia.php") //calcula ultimo id_nota_pedido
    
    
    
    ?>
            
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
                                                <select class="form-control" name="select-productos" id="select-productos" class ='variablesproducto'>
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
                                                      <td><span id = "valueshow" class='variablesproducto'>0</span></td>
<!--
                                                        <td><label id = "valueshow"></label></td>
    -->                                                    
                                                        <td><input type="number" id="cantidadprod" name="cantidadprod" value="1" min="1" max="999" class ='variablesproducto'/></td>
                                                        <td><input type="number" id="descuento-por-producto" name="descuento-por-producto" value="0" min="0" max="100"class='variablesproducto'/></td>
                                                        <td><span id = "respuesta">0</span></td>
                                                    </tr>
                                                </tbody> 
                                            </table>
                                        </div> <!-- fin div id divTablaProd  -->
                                            <div class="col-md-4">
                                                <input class="form-control" type="text" id="last" name ="last" value = <?php  echo $numero; ?>  hidden/>
                                                <input class=" form-control btn btn-primary"  id="confirmar-articulo" name="enviar" value="Guardar" />
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
    $(document).on('change','.variablesproducto', function(){
    var valor2 = $('#cantidadprod').val();
    var valor3 = $('#descuento-por-producto').val();
    operarPrecio(valor2,valor3);
    
});


    $(document).on('change','#select-familia',function(){
        $("#valueshow").html("0");
        $("#respuesta").html("0");
        $("#cantidadprod").val("1");
        $("#descuento-por-producto").val("0");
        $.ajax({
		url: 'borrapsi.php',
		type:'POST',
		dataType: 'html',
	
	})
	.done(function(){
        console.log("se blanqueo el psi");
  
	})
    
    });

function operarPrecio(valor2,valor3){ //calcula el producto unidad-cantidad-descuento
    var valores = {
            "valorCaja2" : valor2,
            "valorCaja3" : valor3
            
    };
    //console.log("Se llamó función operar precio");
  
    $.ajax({
            data:  valores, //datos que se envian a traves de ajax
            url:   'calculos.php', //archivo que recibe la peticion
            type:  'post', //método de envio
            beforeSend: function () {
                    $("#respuesta").html("Calculando...");
            },
            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    $("#respuesta").html(response);
            }
    });    
}
//revisar input para q manualmente respete lo indicado 
/*
var inputCantProducto =  document.getElementById('cantidadprod');
inputCantProducto.addEventListener('inputCantProducto',function(){
  if (this.value.length > 3) 
     this.value = this.value.slice(0,3); 
})
*/

$(document).on('click','#confirmar-articulo', function(){
    var valora = $('#cantidadprod').val();
    var valorb = $('#descuento-por-producto').val();
    var valorc = $('#select-familia').val();//
    var valord = $('#select-productos').val();//
    var valore = $('#last').val();

   
    
    if((valorc=='0'))
    {alert("Escoja una familiar por favor");}

    if((valorc!='0')&&(valord=='0')){
       alert("Escoja un producto por favor"); 
                                     }
    if((valorc!='0')&&(valord!='0')){
         f_confirmar_producto(valora,valorb,valorc,valord,valore);
    }

    

});

function f_confirmar_producto(valor2,valor3,valor4,valor5,valor6){ //calcula el producto unidad-cantidad-descuento
    var values = {
            "vCaja2" : valor2,
            "vCaja3" : valor3,
            "vCaja4" : valor4,
            "vCaja5" : valor5,
            "vCaja6" : valor6
    };

      console.log('-- grabar --');
      console.log(values.vCaja2);//cantidad
      console.log(values.vCaja3);//descuento <--------
      console.log(values.vCaja4);//id_familia
      console.log(values.vCaja5);//id_producto
      console.log(values.vCaja6);//last
      console.log('------------');
      
     

    $.ajax({
            data:  values, //datos que se envian a traves de ajax
            url:   '../baseDeDatos/insert_detalle.php', //archivo que recibe la peticion
            type:  'post', //método de envio
            beforeSend: function () {
                  //  $("#respuesta").html("");
            },
           success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    $("#respuesta").html(response);
                    $("#cantidadprod").val("1");
                    $("#descuento-por-producto").val("0");
                    alert("Item agregado correctamente");
                    
            }
    });    
    
}

    </script>
    </body>
</html>
