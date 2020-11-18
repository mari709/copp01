<?php
session_name("loginUsuario"); 
session_start();

include_once("metodosDePHP.php");
Seguridad::integridadSistema();
//Seguridad::testSeguridad();
?>
<?php
include '../baseDeDatos/conexion.php';

$palabra = $_POST['clientes'];
$hora = $_SERVER["REQUEST_TIME"];


//$objeto = new Conexion();
//$conexion = $objeto->Conectar();
$query = "INSERT INTO nota_pedidos (idcomercio, fecha, idviajante) VALUES ('".$palabra."', CURRENT_TIMESTAMP, '".$miusuario."')";
$resultado = mysqli_query($link, $query);

//$resultado = $conexion->prepare($consulta);
//$resultado->execute();
//$conexion=null;

header("Location: ./crear-nota-pedido-2.php");
?>