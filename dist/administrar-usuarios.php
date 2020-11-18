<?php
session_name("loginUsuario"); 
session_start();

include_once("metodosDePHP.php");
Seguridad::integridadSistema();
//Seguridad::testSeguridad();
?>

<?php 
$title = "Administrar usuarios";
include("vistas/superior.php"); 
?>

<!---- Inicio : Continuación del codigo HTML incluido de "superior.php"-------------------------------------------------------------->
            

<!---- Inicio : elemento "main" ---->            
<main>
<div class="container-fluid">
<!--<h1 class="mt-4">nombre de la pagina actual</h1> -->
<ol class="breadcrumb mb-4">
<li class="breadcrumb-item active">Administrar usuarios</li>
</ol>
</div> <!---- Esta finalizacion de "div" no se si va, antes no estaba, corresponde al div con "class="container-fluid" ---->
</main>
<!---- Fin : elemento "main" ---->


<!--- Inicio : Boton de prueba (se retira una vez finalizada esta prueba) ------>
<div class="container">
<div class="row">
<div class="col-lg-12">
<button id="btnPrueba" type="button" class="btn btn-success">Prueba</button>	
</div>		
</div>	
</div>
<!--- Fin : Boton de prueba (se retira una vez finalizada esta prueba) ------>


<!---- Inicio : Tabla Viajeros & Administradores ---->
<!---- Inicio : Elemento "div" con clase "container" ---->
<div class = "container" >
<div class="row">
<div class="col-lg-12">
<div class="table-responsive">

<table id="tablaUsuarios" class="table table-striped table-bordered table-condensed" style="width: 100%" >
<thead class="text-center">
<tr>
<th>ID de Usuario</th>
<th>Nombre de Usuario</th>
<th>Comision</th>
<th>Tipo de Usuario</th>
<th>E-Mail</th>
<th>Estado del Usuario</th>
<th>Acciones</th>
</tr>	
</thead>
<tbody>
</tbody>	
</table>

</div>	
</div>
</div>	
</div>
<!---- Fin : Elemento "div" con clase "container" ---->
<!---- Fin : Tabla Viajeros & Administradores ---->



<!---- Inicio : Ventana "Modal" N°1 ---->
<div class = "modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">


<!----Inicio : "modal-header" (Importante) ---->
<div class="modal-header" > 
<h5 class="modal-title" id="editarUsuarioModal"></h5>

<!---- Boton para cerrar la ventana "Modal" ---->
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<!----Fin : "modal-header" (Importante) ---->



<!---- Inicio : "form" ---->
<form id="formUsuarios">

<!---- Inicio : "modal-body" ---->
<div class = "modal-body">


<!---- Inicio : Tipo de Usuario ---->
<div class="col-md-6">
<fieldset>
<legend class="small mb-1"><u>Indique tipo de usuario a crear</u></legend>
<label for="viajante">
<input id="viajante"  value="viajante" type="radio" name="grupotipoviajante" > Viajante</label>
<label for="administrador">
<input id="administrador" value="administrador" type="radio" name="grupotipoviajante"> Administrador</label>
</fieldset>
</div>
<!---- Fin : Tipo de Usuario ---->



<!---- Inicio : Estado del Usuario ---->
<div class="col-md-6">
<fieldset>
<legend class="small mb-1"><u>Estado del Viajante/Administrador</u></legend>
<label for="eviajanteh"><input id="eviajanteh" value="habilitado" type="radio" name="grupoestadoviajante" > Habilitado</label>
<label for="eviajantea"><input id="eviajantea" value="deshabilitado" type="radio" name="grupoestadoviajante"> Deshabilitado</label>
</fieldset>
</div>
<!---- Fin : Estado del Usuario ---->


<!----Inicio : Nombre del Usuario ---->
<div class="col-md-12">
<div class="form-group">
<label class="small mb-1" for="inputFirstName"><u>Nombre de Usuario</u></label>
<!----Hay que editar el "placeholder" para que muestre el nombre del usuario de la fila seleccionada ---->
<input class="form-control py-4" id="inputFirstName" name="nombreViajante" type="text" placeholder="Ingrese su nombre" required/> 
</div>
</div>
<!----Fin: Nombre del Usuario ---->



<!---- Inicio : E-mail ---->
<div class="col-md-12">

<div class="form-group">
<label class="small mb-1" for="inputEmailAddress"><u>Email</u></label>
<!----Hay que editar el "placeholder" para que muestre el e-mail del usuario de la fila seleccionada ---->
<input class="form-control py-4" id="inputEmailAddress" name="direccionEmail" type="email" aria-describedby="emailHelp" placeholder="Ingrese su direccion de email" required />
</div>

</div>
<!---- Fin : E-mail ---->


<!---- Inicio : Comisión ---->
<div class="col-md-12">
<div class="form-group">
<label class="small mb-1" for="inputComision"><u>Comisión(%)</u></label>

<input class="form-control py-4" id="inputComision" name="comisionViajante" type="number" aria-describedby="comisionHelp" placeholder="Ingrese comision del viajante"  />

</div>
</div>
<!---- Fin : Comisión ---->



<!---- Inicio : Nueva Contraseña (opcional) (Pendiente) ---->

<!---- Fin : Nueva Contraseña  (opcional) (Pendiente) ----->


<!---- Inicio : Confirmar Nueva Contraseña (Pendiente) ----->

<!---- Fin : Confirmar Nueva Contraseña (Pendiente) ----->


<!---- Inicio : Notificar a usuario de cambios ---->
<div class="form-group">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" id="notificarCambios" type="checkbox" />
<label class="custom-control-label" for="notificarCambios">Notificar al usarios via e-mail de los cambios realizados.</label>
</div>
</div> 
<!---- Fin : Notificar a usuario de cambios ---->


</div>
<!---- Fin : "modal-body" ---->


<!---- Inicio : "modal-footer" con botones de "Cancelar" y "Aceptar" ---->
<div class="modal-footer">
	
<button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
<button type="submit" id="botonGuardar" class="btn btn-light" >Guardar</button>	


</div>
<!---- Fin : "modal-footer" con botones de "Cancelar" y "Aceptar" ---->


</form>
<!---- Fin : "form" ---->





</div><!---- "modal-content" ---->	
</div><!---- "modal-dialog" ---->	
</div><!---- "modal fade" ---->
<!---- Fin : Ventana "Modal" N°1 ---->



<!---- Inicio : inclusion "footer.php" & "scripts.php" ---->
<?php include_once("vistas/footer.php"); ?>
<?php include_once("vistas/scripts.php"); ?>
<!---- Fin: inclusion "footer.php" & "scripts.php" ---->

<!---- Inicio : elementos "script" ---->
<script src="js/funcionJavaScript1.js"></script> 
<!---- Esto ya esta incluido en "JS files" de "Bootstrap" ... ---->
<!---- <script src="https://unpkg.com/@popperjs/core@2" crossorigin="anonymous"></script> ---->

<!---- ---->

<!---- <script>
    $.ajax({
        url: 'metodosDePHP.php',
        type: 'post',
        data: { "callFunc1": "1"},
        success: function(response) { console.log(response); }
    });
</script> ---->




<!----<script>
$(document).ready(function() {
$('#tablaUsuarios').DataTable( {
                    
"dom": 'ftipr',
"bFilter": true,
"bInfo": false,
"bAutoWidth": false,
                    
"ajax":{
"url": "../baseDeDatos/consultaUsuarios.php",
"dataSrc":""
},           
"columns":[
{"data": "idviajante"},
{"data": "viajante"},
{"data": "estado_viajante"},
{"data": "comision"}
]  
});
});
</script> ---->


<!---- Fin: elementos "script" ---->
  
 
</body>
<!---- Fin : elemento "body" ---->


</html>
<!---- Fin : Codigo HTML ---->
