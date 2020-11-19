// Este archivo .js se encarga de cargar los datos en la tabla : 

// Seria interesante integrarlo en "funcionesJavaScript.js" (Estudiar como se hace ....)

/*---- Inicio : Codigo 1 ------------------------------*/
//$(document).ready(function(){
	
	//$('#tablaUsuarios').DataTable( {
	
	
	//"ajax":{
		//"url" : "../metodosDePHP.php",
		//"type": "post",
		//"data": { "tablaAdministrar" : "1" },
		
		//"dataSrc" : ""
		
	//},
	
	//"columns" : [
	
	//{ "data": "idViajante" };
	//{ "data": "statusUser" };
	//{ "data": "email" };
	
	//]	
	
	
	//});
	
	
	//});
/*---- Fin : Codigo 1 ------------------------------*/	

/*---- Inicio : Codigo 2 --------------------------------------*/

// $.ajax({
        //url: '../dist/metodosDePHP.php',
        //type: 'post',
        //data: { "callFunc1": "1"},
        //success: function(response) { console.log(response); }
   // });
    
/*---- Fin : Codigo 2 ---------------------------------------*/    


/*---- Inicio : Codigo 3 -------------------------------------*/
	
$(document).ready(function() {
tablaUsuarios = $('#tablaUsuarios').DataTable( {
	
//"columnDefs":[{
	
	//"targets" : -1,
	//"data" : null,
	//"defaultContent": "<div class='text-center'><div class= 'btn-group'><button class='btn btn-primary btnEditar'>Editar </button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"
	


//}],	
                    
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
{"data": "comision"},
{"data": "statusUser"},
{"data": "email"},
{"data": "estado"},

/*----Inicio : "columns.render" ----*/

/*----https://datatables.net/reference/option/columns.render ----*/
/*----https://stackoverflow.com/questions/24286842/adding-buttons-to-each-row-using-jquery-datatables ----*/

{"render": function (data, type, full, meta) {

return '<div class=\'text-center\'><div class= \'btn-group\'><button class=\'btn btn-primary btnEditar\'>Editar </button><button class=\'btn btn-danger btnBorrar\'>Borrar</button></div></div>';
											}
}
/*----Fin : "columns.render" ----*/

],

"language" : {
	
		 
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No hay información disponible",
            "infoFiltered": "(filtrado de un total de _MAX_ registros totales)",
     		"sSearch" : "Buscar:",
     		
     		"oPaginate": {
				
				"sFirst" : "Primero",
				"sLast" : "Ultimo",
				"sNext" : "Siguiente",
				"sPrevious" : "Anterior"
				
			},
			
			"sProcessing" : "Procesando...",
	
		
	
}


});




/*----Inicio : Test de boton de prueba [Funciona] ----*/
//$("#btnPrueba").click(function(){

//alert("Nuevo");
	
//}
//);

$("#btnPrueba").click(function(){

$("#formUsuarios").trigger("reset");
$(".modal-header").css("background-color","blue");
$(".modal-header").css("color","white");
$(".modal-title").text("Editar Viajante");


$("#modalEditar").modal("show");
	
}
);


/*----Fin : Test de boton de prueba [Funciona]  ----*/



/*----Inicio : Boton de Editar -----*/ 
// Paso #1 Obtener cada uno de los datos de la fila seleccionada...
var fila;

$(document).on("click",".btnEditar",function(){

fila = $(this).closest("tr");
id = parseInt(fila.find('td:eq(0)').text());
nombreUsuario = fila.find('td:eq(1)').text();
comision = parseInt(fila.find('td:eq(2)').text());
tipoDeUsuario = fila.find('td:eq(3)').text();
email = fila.find('td:eq(4)').text();
estadoUsuario = fila.find('td:eq(5)').text();

if(estadoUsuario == "Habilitado"){
	$('#eviajantea').attr('checked', false);
	$('#eviajanteh').attr('checked', 'checked');
	
}

else if(estadoUsuario == "Deshabilitado"){
	$('#eviajanteh').attr('checked', false);
	$('#eviajantea').attr('checked', 'checked');
	
}


$("#formUsuarios").trigger("reset");
$(".modal-header").css("background-color","blue");
$(".modal-header").css("color","white");
$(".modal-title").text("Editar Viajante");


$("#modalEditar").modal("show");



//alert(estadoUsuario);
	
}
);
/*----Fin : Boton de Editar ----*/

});	
/*---- Fin : Codigo 3 -------------------------------------*/












