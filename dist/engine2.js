/*
$(buscar_datos());

function buscar_datos(consulta){

	$.ajax({
		url: 'busc.php',
		type:'POST',
		dataType: 'html',
		data :{consulta:consulta},

	})
	.done(function(respuesta){
    $("#valueshow").html(respuesta);
	})
    .fail(function(){
        console.log("error");

    });

}
$(document).on('keyup','#valueshow',function(){

 var valor = $(this).val();
 console.log(valor);

 if(valor !=""){

 	buscar_datos(valor);
 }else{

 	buscar_datos();
 }


})
*/