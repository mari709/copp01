


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
	operarPrecio(1,0);
}
$(document).on('change','#select-productos',function(){

 var valor = $(this).val();
 console.log(valor);
 if(valor !=""){
	 buscar_datos(valor);
	 console.log("algo cambio en select productos");
	
 }else{
 	buscar_datos();
 }
 
})


