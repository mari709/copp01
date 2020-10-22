//console.log('Funcionando');
//ErrorContrasena.innerHTML = "<label class="small mb-1" for="inputPassword">Password mal ingresada</label>";
//document.getElementById("ErrorContrasena").innerHTML = "<label class="small mb-1" for="inputPassword">Password mal ingresada</label>";

/*---- Inicio : Validacion de formulario ----------------------------------------------------------*/
var form = document.getElementById('Formulario');

form.addEventListener('submit',function(evt){
	
if(inputConfirmPassword.value != inputPassword.value){
	
	evt.preventDefault();
	ErrorContrasena.innerHTML = "<span style='color: red;'>Las contraseñas no coinciden... </span>";

}


}

);
/*---- Fin : Validacion de formulario ----------------------------------------------------------*/







