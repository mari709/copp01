<?php

#Borradores

//echo "se ejecuto";
//echo filter_input(INPUT_POST,'inputEmailAddress');

//$email = filter_input(INPUT_POST,'inputEmailAddress');
//echo $email;

//session_start();



/*---Este codigo se ejecuta cuando cualquier input invoca este archivo mediante el method:"POST" ---*/
if(isset($_POST['inputEmailAddress']) && isset($_POST['inputPassword'])){
	testVerificacionLogin();
	
} 

//else{
	//header("Location: https://www.google.com/search?q=premier+league+posiciones&oq=premier+l&aqs=chrome.0.69i59j69i57j46j0l2j69i60l3.7977j0j7&sourceid=chrome&ie=UTF-8");
//}
/*--------------------------------------------------------------------------------------------------*/


/*---- Funcion "Test" para verificar si ingreso se realizo de manera correcta o no -----*/
function testVerificacionLogin(){
	
	if($_POST['inputEmailAddress']=="admin@hotmail.com" && $_POST['inputPassword']=="12345"){
	//Si el metodo "if" se cumple, tanto la contrase�a como el email son v�lidos...
	
	//Limpio los elementos del array() "$_POST" , tanto "inputEmailAddress" como "inputPassword" , no hace falta en realidad por que una vez cruzado este punto, se ejecutara un "header()" donde ya nada queda almacenado, pero si en vez de eso se decide utilizar un "include()" sera 100% necesario limpiar las varianbles puesto que si no se ejecutara el if del inicio del script que ejecuta "testVerificacionLogin()"
	
	 unset($_POST['inputEmailAddress'],$_POST['inputPassword'] );
	
	// Le asigno un nombre a la nueva sesion que se creara ...
	
	session_name("loginUsuario");
	
	//Se define sesion y se guardan los datos ...	
	
	session_start();
	
	// Defino en la sesion que el usuario esta autorizado...
	
	$_SESSION["autentificado"] = "Si";
	
	// Defino la fecha y hora de inicio de sesi�n en formato "aaaa-mm-dd hh:mm:ss"
	
	$_SESSION["ultimoAcceso"] = date("Y-n-j H:i:s");
	
	// incluyo o incorporo la p�gina "index.php"
	
	//include ("index.php");
	//header("Location: ./index.php"); // Se redirecciona el usuario a...
	header("Location: index.php");
	}
	
	else{
		//El usuario y/o la contrase�a no fueron correctamente ingresados....
		 header("Location: ./login.php?errorusuario=si"); //Observar que se agrega "errorusuario=si" al link, al ser redireccionado, este dato sera 
		 											     	         //utilizado.
		
	}

	
}
/*--------------------------------------------------------------------------------------*/



/*----Inicio: Clase seguridad----*/
class Seguridad{
	


/*---- Funcion "Test" de "Seguridad" , sirve para verificar en cada p�gina del sistema si el usuario esta logeado o no  ----*/
# Es un metodo "static"
public static function testSeguridad(){
	
	#Esto es para probar que se hace uso de esta funcion...
	//header("Location: http://en.gameslol.net/yu-gi-oh-gx-duel-academy-1025.html");
	
	if ($_SESSION["autentificado"] != "Si") {
    //si no existe, envio a la p�gina de autentificacion
    header("Location: ./login.php"); //   /copp01/dist/login.php
    //ademas salgo de este script
    
    
    
    exit();
}
	else{ 
	self::tiempoPermanencia();

		}
}
/*--------------------------------------------------------------------------------------------------------------------------*/




/*---- Funcion "tiempoPermanencia", si el usuario supera los 10 minutos sera enviado a la pa�gina de login  ---- */
public static function tiempoPermanencia(){
	//header("Location: https://www.google.com/search?q=premier+league+posiciones&oq=premier+l&aqs=chrome.0.69i59j69i57j46j0l2j69i60l3.7977j0j7&sourceid=chrome&ie=UTF-8");
	
	//Vamos a proceder a calcular el tiempo transcurrido desde el ultimo acceso...
	//Creamos una variable de nombre "fechaGuardada" a la que le almacenamos la fecha del ultimo acceso extraida de la sesion... 
	$fechaGuardada = $_SESSION["ultimoAcceso"];
	//Creamos una variable de nombre "ahora" donde almacenamos la fecha y hora de acceso actual...
	$ahora = date("Y-n-j H:i:s");
	//Creamos una variable de nombre "tiempo_transcurrido", donde guardamos el resultado de calcular la diferencia entre el tiempo almacenado en la variable 
	//"ahora" y el tiempo almacenado en la variable "fechaGuardada", el resultado estara dado en segundos...
	$tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada));
	
	echo $tiempo_transcurrido;
	
	#Procedemos a comparar el tiempo transcurrido con el limite que fijemos nosotros como maximo... 
	 
	 if($tiempo_transcurrido >= 60){
	 	//es decir, suponemos que se cumple que el tiempo transcurrido es mayor a 600 segundos o lo que es lo mismo 10 minutos...
	 	
	 	// Procedemos a destruir la sesion actual ...
	 	
	 	session_destroy();
	 	
	 	//reedirijimos al usuario a la p�gina de autenticaci�n...
	 	
	 	header("Location: ./login.php");
	 	
	 	
	 	exit();
	 	
	 }
	 
	 #Suponiendo que no se supero el limite de tiempo y por tanto no se cumple la condicion del if anterior...
	 //Procedemos a actualizar la fecha de sesion 
	 
	 else{
	 	
	 	$_SESSION["ultimoAcceso"] = $ahora;
	 	//exit();
	 }

//exit();
}

/*-----------------------------------------------------------------------------------------------------------------------------*/



/*---- Funcion: "integridadSistema", destinada a verificar que los elementos del sistema se encuentrer correctamente antes de usarse -----*/

public static function  integridadSistema(){
	
	//$trans_sid = ini_get(session.use_trans_sid);
	
	if(ini_get("session.use_trans_sid") != 0){
		
		//header("Location: 404.html");
		
		ini_set("session.use_trans_sid","0");
		
	}
	
	if(ini_get("session.use_only_cookies") != 1){
		
		//header("Location: 404.html");
		
		ini_set("session.use_only_cookies","1");
		
	}
	
	
	if(ini_get("session.cookie_lifetime") != 0){
		
		//header("Location: 404.html");
		
		ini_set("session.cookie_lifetime","0");
		
	}
	
	
	
}
/*-----------------------------------------------------------------------------------------------------------------------------------------*/



}
/*---- Fin: Clase Seguridad ----*/



?>