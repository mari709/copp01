<?php
/*---- Borradores ---------------------------------------*/
//echo "se ejecuto";
//echo filter_input(INPUT_POST,'inputEmailAddress');

//$email = filter_input(INPUT_POST,'inputEmailAddress');
//echo $email;

//session_start();
/*------------------------------------------------------*/

# Constantes tipo "define"
define("BCRYPT_COST", "14");

# Variables de tipo "global"
global $usuarioCreado;
$usuarioCreado= "no";


# Usuario administrador decide crear un nuevo usuario ...

/*----Este codigo se ejecuta cuando "admin" presiona "Ingresar" en la pagina "Registro.php*/
if(isset($_POST['nombreViajante']) && isset($_POST['direccionEmail']) && isset($_POST['Password'])  && isset($_POST['confirmacionPassword']) ){
	
	global $nombreViajante;
	global $direccionEmail;
	global $Password;
	global $confirmacionPassword;
	
	global $tipoViajante;
	global $estadoViajante;
	
	
	
	
	if(isset($_POST['grupotipoviajante'])){
		
		//if($_POST['grupotipoviajante']=="viajante"){
		//header ("Location: https://drama.fandom.com/es/wiki/Death_note:_L_Change_the_world");
		//$tipoViajante = "viajante";
		//}
		
		$tipoViajante = $_POST['grupotipoviajante'];
		
	}
	
	/*----Borrador ---------------------------------------*/
	//if(isset($_POST['grupotipoviajante'])){
		
		//if($_POST['grupotipoviajante']=="administrador"){
		//header ("Location: https://genshin.mihoyo.com/en");	
		//}
		
	//}
	
	
	if(isset($_POST['grupoestadoviajante'])){
		
		if($_POST['grupoestadoviajante']=="habilitado"){
		//header ("Location: https://drama.fandom.com/es/wiki/Death_note:_L_Change_the_world");	
		$estadoViajante = 1 ;
		}
		
		else {
		$estadoViajante = 0 ;
		}
		
	}
	
	
	/*----Borrador ---------------------------------------*/
	//if(isset($_POST['grupoestadoviajante'])){
		
		//if($_POST['grupotipoviajante']=="deshabilitado"){
		//header ("Location: https://genshin.mihoyo.com/en");	
		//}
		
	//}
	
	
	
	
	$nombreViajante = $_POST['nombreViajante'];
	$direccionEmail = $_POST['direccionEmail'];
	$Password = $_POST['Password'];
	$confirmacionPassword = $_POST['confirmacionPassword'];
	
	imperidirRepetidos();
	//crearUsuario();
}
/*----------------------------------------------------------------------------------------*/


error_reporting(E_ALL ^ E_NOTICE); // Notificar todos los errores excepto E_NOTICE


# Usuario escribe sus dados en la pagina de login y presiona "ingresar" ....

/*----Este codigo se ejecuta cuando "input" invoca este archivo mediante el method:"POST" de la pagina "login.php"-------------------*/
if(isset($_POST['inputEmailAddress']) && isset($_POST['inputPassword'])){
	testVerificacionLogin();
	} 

//else{
	//header("Location: https://www.google.com/search?q=premier+league+posiciones&oq=premier+l&aqs=chrome.0.69i59j69i57j46j0l2j69i60l3.7977j0j7&sourceid=chrome&ie=UTF-8");
//}
/*------------------------------------------------------------------------------------------------------------------------------------*/




# Admin ingresa a "administrar-usuarios"...

/*---- Este codigo se ejecuta ni bien se invoca el archivo "funcionJavaScript1.js", el mismo envia por "POST" un "data": ----*/
/*
* Este archivo "data" se llama "tablaAdministrar" y su valor es "1".
* Si, esto es correcto, le devolvemos a este Script la información de la tabla en formato "json"...
* Este segmento de codigo NO SE ESTA UTILIZANDO ACTUALMENTE!!!! 
*/
function test($data){
        return $data+10;
        
    }

    if (isset($_POST['callFunc1'])) {
        echo test($_POST['callFunc1']);
    }



if(isset($_POST['tablaAdministrar'])){
	
	header ("Location: https://genshin.mihoyo.com/en");
	
	if($_POST['tablaAdministrar']=="1"){
		
		
		
	}

    } 


/*---------------------------------------------------------------------------------------------------------------------------*/



/*---- Funcion "Test" para verificar si ingreso se realizo de manera correcta o no (Temporal) -----*/
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
	
	// incluyo o incorporo la pagina "index.php"
	
	//include ("index.php");
	//header("Location: ./index.php"); // Se redirecciona el usuario a...
	header("Location: index.php");
	}
	
	else{
															//El usuario y/o la contrasena no fueron correctamente ingresados....
		 header("Location: ./login.php?errorusuario=si"); //Observar que se agrega "errorusuario=si" al link, al ser redireccionado, este dato sera 
		 											     //utilizado.
		
	}

	
}
/*--------------------------------------------------------------------------------------*/



/*---- Test de verificación Login (Definitivo)  ----------------------------------------*/
function testVerificacionLoginFinal(){
	
	
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
    //si no existe, envio a la pagina de autentificacion
    header("Location: login.php"); //   /copp01/dist/login.php
    //ademas salgo de este script
    
    
    
    exit();
}
	else{ 
	self::tiempoPermanencia();  // Aca deberia verificar con un si existe una cookie que solicita "Recordar usaurio" y si esta habilitada
								// ... de ser asi, nunca deberia ejecutarse "tiempoPermanencia()"
		}
}
/*--------------------------------------------------------------------------------------------------------------------------*/




/*---- Funcion "tiempoPermanencia", si el usuario supera los 10 minutos sera enviado a la pagina de login  ---- */
public static function tiempoPermanencia(){
	
	//header("Location: https://www.google.com/search?q=premier+league+posiciones&oq=premier+l&aqs=chrome.0.69i59j69i57j46j0l2j69i60l3.7977j0j7&sourceid=chrome&ie=UTF-8");
	
	#Vamos a proceder a calcular el tiempo transcurrido desde el ultimo acceso...
	
	//Creamos una variable de nombre "fechaGuardada" a la que le almacenamos la fecha del ultimo acceso extraida de la sesion... 
	$fechaGuardada = $_SESSION["ultimoAcceso"];
	//Creamos una variable de nombre "ahora" donde almacenamos la fecha y hora de acceso actual...
	$ahora = date("Y-n-j H:i:s");
	//Creamos una variable de nombre "tiempo_transcurrido", donde guardamos el resultado de calcular la diferencia entre el tiempo almacenado en la variable 
	//"ahora" y el tiempo almacenado en la variable "fechaGuardada", el resultado estara dado en segundos...
	$tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada));
	
	echo $tiempo_transcurrido;
	
	#Procedemos a comparar el tiempo transcurrido con el limite que fijemos nosotros como maximo... 
	 
	 if($tiempo_transcurrido >= 600){
	 	//es decir, suponemos que se cumple que el tiempo transcurrido es mayor a 600 segundos o lo que es lo mismo 10 minutos...
	 	
	 	// Procedemos a destruir la sesion actual ...
	 	
	 	session_destroy();
	 	
	 	//reedirijimos al usuario a la pagina de autenticacion...
	 	
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
	
	/*---- Inicio : Borrador ---------------------------------------------------------------------------------------------------------------*/
	
	# Intentamos establecer una conexion con la Base de Datos...
	
	//$usernameBD = "root";
	//$passwordBD = "";
	//$hostBD = "127.0.0.1";
	$baseDeDatos = "coppens";
	
	//global $dbConnect;   
	
	/**
	* Almacenamos en una variable el alias de la funcion "mysqli::__construct", Que permite abrir una conexion al servidor de MySQL.
	* La sintaxis oficial segun la pagina de PHP es : $dbConnect = new mysqli_connect ... (la diferencia es el "new").
	* Basicamente , "$dbConnect" es una instancia del objeto "mysqli_connect" y posee todas sus propiedades (como por ejemplo sus metodos.
	*/
    
    //$dbConnect =  mysqli_connect($hostBD, $usernameBD, $passwordBD) 
                                                               
     /**
	 * En caso que no se pueda establecer la conexion aparece este mensaje. 
	 */                                                      
                                                               
     //or die("Unable to connect to MySQL.");
     
     
     /**
	 * Si se establece correctamente , el mensaje es este.
	 */
     
     //echo "Connected to MySQL","<br><br>"; 
     
     /*---- Fin : Borrador ---------------------------------------------------------------------------------------------------------------*/
     
     # Verificamos estar conectados con la Base de Datos 
     
     $dbConnect = conexionBD::getConexion();
     
     # Seleccionamos la proxima base de datos a  utilizar...
	
	 mysqli_select_db($dbConnect,$baseDeDatos) or die("Could not select dbName.");
	 
	 # Verificamos si en la misma se encuentra creada la tabla "datosUsuario", si no existe la creamos...
	 
	 $sql = "CREATE TABLE IF NOT EXISTS `coppens`.`datosUsuario` ( `idLogin` INT(50) NOT NULL AUTO_INCREMENT , `idViajante` INT(50) NOT NULL , `password` VARCHAR(100) NOT NULL , `statusUser` BOOLEAN NOT NULL DEFAULT FALSE , `email` VARCHAR(70) NOT NULL , `claveCookie` INT(10) NULL DEFAULT NULL , PRIMARY KEY (`idLogin`)) ENGINE = InnoDB;
";
	 
	 mysqli_query($dbConnect, $sql);
	 
	 # Verificamos que las lineas de php.ini estan configuradas tal como las necesitamos....
	
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



/*---- Inicio : Clase "conexionBD"  ----*/
class conexionBD{
	
	private static $instance; // 
	
	# Metodo para crear la conexion....
	private static function conectar(){
		
	$usernameBD = "root";
	$passwordBD = "";
	$hostBD = "127.0.0.1";
	$baseDeDatos = "coppens";
	
	$dbConnect = mysqli_connect($hostBD, $usernameBD, $passwordBD) 
	
	 /**
	 * En caso que no se pueda establecer la conexion aparece este mensaje. 
	 */                                                      
                                                               
     or die("Unable to connect to MySQL.");
     
     
	return $dbConnect;	
	}
	
	
	# Metodo que verifica si la conexion ya fue creada ....
	public static function getConexion(){
		
		if (!self::$instance){
			
			self::$instance = self::conectar();
			
		}
		
		return self::$instance;
		
	}
	
	
	# Esto habria que ver si funciona, seria para verificar que efectivamente no se cree una conexi+on nueva....
	
public function __clone() {
    throw new Exception("No se puede clonar esta clase");
}



}
/*---- Fin :  Clase "Conexion con la BD" --------*/




/*---- Inicio: metodo "impedirRepetidos" */

/**
* La finalidad de este metodo es impedir que el usuario se haga el vivo el muy plaga ,e ingrese usuarios cuyo ...
* "nombre de viajante" ya se encuentre utilizado por algun otro usuario
* "e-mail" ya se encuentre utilizado por algun otro usuario
* "contraseña" ya se encuentre utilizado por algun otro usuario
* Basicamente impedir nombres de viajantes, e-mail y/o contraseñas repetidas carajo!!
*/

function imperidirRepetidos(){
	
	# Declaramos las variables globales que vamos a utilizar.
	
	global $nombreViajante;
	global $direccionEmail;
	global $Password;
	
	
	
	global $usuarioCreado;
	
	# Declaramos las variables propias de esta funcion a utilizar.
	
	$passwordRepetida = "no";
	$emailRepetido = "no";
	$viajanteRepetido = "no";
	$baseDeDatos = "coppens";
	$cantidadFilas = "0";
	
	# Encriptamos la variable "Password" para luego buscar si alguna de la B.D. coincide con esta...
	
	//$options = array ('cost' => BCRYPT_COST);
	//$derivedPassword = password_hash($Password,PASSWORD_BCRYPT,$options);
	
	# Verificamos estar conectados con la B.D.
	
	$dbConnect = conexionBD::getConexion();
	mysqli_select_db($dbConnect,$baseDeDatos) or die("Could not select dbName.");
	
	# Verificamos si en la B.D. se encuentra alguna contraseña que coincida con la que acabamos de encriptar...
	
	$sql = "SELECT `password` FROM `datosusuario`";
	$resultado = mysqli_query($dbConnect, $sql);
	//$cantidadFilas = mysqli_num_rows($resultado);
	//mysqli_free_result($resultado);
	
	while($fila = mysqli_fetch_row($resultado)){
		
		if(password_verify($Password,$fila[0]) ){
			
			//header ("Location: https://genshin.mihoyo.com/en");
			$passwordRepetida = "si";
			
		}
		
		
	}
	
	mysqli_free_result($resultado);
	
	# Verificamos si en la B.D. el nombre de usuario dado se encuentra repetido...
	$sql = "SELECT `viajante` FROM `viajantes` WHERE `viajante` = \"".$nombreViajante."\";";
	$resultado = mysqli_query($dbConnect, $sql);
	
	if(mysqli_num_rows($resultado)>0){
		//header ("Location: https://genshin.mihoyo.com/en");
		$viajanteRepetido = "si";
	}
	
	mysqli_free_result($resultado);
	
	# Verificamos sin en la B.D. el e-mail dado del usuaro se encuentra repetido....
	
	$sql = "SELECT `email` FROM `datosusuario` WHERE `email` = \"".$direccionEmail."\";";
	$resultado = mysqli_query($dbConnect, $sql);
	
	if(mysqli_num_rows($resultado)>0){
		//header ("Location: https://genshin.mihoyo.com/en");
		$emailRepetido = "si";
	}
	
	mysqli_free_result($resultado);
		
	//echo "paso algo malo";
	//if($cantidadFilas > 0 ){
		
		//header ("Location: https://genshin.mihoyo.com/en");
		
	//}
	
	
	# Verificamos si alguno de los casos de datos repetidos se produjo, de ser asi, los mensjaes seran mostrados en pantalla....
	
	if($emailRepetido == "si" || $viajanteRepetido == "si" || $passwordRepetida == "si" ){
		
		//header ("Location: https://genshin.mihoyo.com/en");
		include_once("Registro.php");
		
	}
	
	else{
		crearUsuario();
	}

}
/*---- Fin: metodo "impedirRepetidos" */





/*---- Inicio : Funcion Creacion de usuario ----*/
function crearUsuario(){
	
	global $nombreViajante;
	global $direccionEmail;
	global $Password;
	global $confirmacionPassword;
	
	global $tipoViajante;
	global $estadoViajante;
	
	# Si no declaro esta variable como global, "Registro.php" no conoce la existencia de la variable (Investigar el problema)
	global $usuarioCreado;
	$usuarioCreado="no";
	
	# Si no las declaro dentro de este metodo, por alguna razon no las toma en Registro.php (Investigar el problema)
	global $passwordRepetida;
	global $emailRepetido;
	global $viajanteRepetido;
	
	$baseDeDatos = "coppens";
	
	# Verificamos estar conectados con la Base de Datos ...
	
	$dbConnect = conexionBD::getConexion();
	mysqli_select_db($dbConnect,$baseDeDatos) or die("Could not select dbName.");
	
	//if(!$dbConnect){
		//header ("Location: https://drama.fandom.com/es/wiki/Death_note:_L_Change_the_world");
	//}
	
	
	$options = array ('cost' => BCRYPT_COST);
	$derivedPassword = password_hash($Password,PASSWORD_BCRYPT,$options);
	
	# Insertamos el usuario en la tabla `viajantes`
	$sql = "INSERT INTO `viajantes` (`idviajante`, `codigo`, `viajante`, `usuario`, `estado_viajante`, `comision`) VALUES (NULL, '', '".$nombreViajante."', '', '".$estadoViajante."', '0')";
	
	 mysqli_query($dbConnect, $sql);
	 
	 # Obtenemos el `idviajante` del ultimo usuario registrado
	 $sql = "SELECT `idviajante` FROM `viajantes` WHERE `viajante` = \"".$nombreViajante."\";";
	 $resultado = mysqli_query($dbConnect, $sql);
	 $idDeViajante = mysqli_fetch_assoc($resultado);
	 mysqli_free_result($resultado);	
	 
	 # Insertamos en la tabla `datosusuario` los datos correspondientes al `idviajante` anteriormente buscado...
	 
	 $sql = "INSERT INTO `datosusuario` (`idLogin`, `idViajante`, `password`, `statusUser`, `email`, `claveCookie`) VALUES (NULL, '".$idDeViajante["idviajante"]."', '".$derivedPassword."', '".$tipoViajante."', '".$direccionEmail."', NULL)";
	 
	 mysqli_query($dbConnect, $sql);
	 	
	 	
	
	 
	 # Liberamos la informacion de las variables "$_POST" para que puedan ser utilizadas nuevamente....
	 unset($_POST['nombreViajante'], $_POST['direccionEmail'],$_POST['Password'],$_POST['confirmacionPassword'],$_POST['grupotipoviajante'],$_POST['grupoestadoviajante'] );
	 
	 
	 # Le damos valor "si" a la variable $usuarioCreado, luego, volvemos a mostrar  "Registro.php"
	 
	 
	 $usuarioCreado = "si";
	 include_once("Registro.php");
}
/*----------------------------------------------*/

?>