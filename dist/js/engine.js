
$(buscar_datos());

function buscar_datos(consulta){

	$.ajax({
		url: 'buscar.php',
		type:'POST',
		dataType: 'html',
		data :{consulta:consulta},

	})
	.done(function(respuesta){
    $("#valueshow").html(respuesta);
	})
    .fail(function(respuesta){
        console.log("error");

    });

}
$(document).on('onChange'.'#select-productos',function(){

 var valor = $(this).val();
 console.log(var);

 if(valor !=""){

 	buscar_datos(valor);
 }else{

 	buscar_datos();
 }


})