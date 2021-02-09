


function buscar_datos(consulta){

	$.ajax({
		url: 'buscar.php',
		type:'POST',
		dataType: 'html',
		data : {consulta: consulta},

	})
	.done(function(respuesta){
    $("#valueshow").html(respuesta);
	})
    .fail(function(){
        console.log("error");

    });

}
$(document).on('change','#select-productos',function(){

 var valor = $(this).val();
 console.log(valor);

 if(valor !=""){

 	buscar_datos(valor);
 }else{

 	buscar_datos();
 }


})