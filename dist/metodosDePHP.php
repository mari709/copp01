<?php

//echo "se ejecuto";
//echo filter_input(INPUT_POST,'inputEmailAddress');

//$email = filter_input(INPUT_POST,'inputEmailAddress');
//echo $email;


/*---Este codigo se ejecuta cuando cualquier input invoca este archivo mediante el method:"POST" ---*/
if(isset($_POST['inputEmailAddress']) && isset($_POST['inputPassword'])){
	testVerificacionLogin();
	
} 
/*--------------------------------------------------------------------------------------------------*/


/*---- Funcion "Test" para verificar si ingreso se realizo de manera correcta o no -----*/
function testVerificacionLogin(){
	
	if($_POST['inputEmailAddress']=="admin@hotmail.com" && $_POST['inputPassword']=="12345"){
	//Si el metodo "if" se cumple, tanto la contraseña como el email son válidos...
	//Se define sesion y se guardan los datos ...	
	session_start();
	$_SESSION["autentificado"] = "Si";
	header("Location: index.html"); // Se redirecciona el usuario a...
	}
	
	else{
		//El usuario y/o la contraseña no fueron correctamente ingresados....
		 header("Location: login.php?errorusuario=si"); //Observar que se agrega "errorusuario=si" al link, al ser redireccionado, este dato sera 
		 											     //utilizado.
		
	}
	
}
/*--------------------------------------------------------------------------------------*/


/*---- Funcion "Test" de "Seguridad" , sirve para verificar en cada página del sistema si el usuario esta logeado o no  ----*/
function testSeguridad(){
	
	
}
/*--------------------------------------------------------------------------------------------------------------------------*/

?>