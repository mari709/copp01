<?php
include '../baseDeDatos/conexion.php';

$palabra = $_POST['clientes'];
//echo $palabra;

$objeto = new Conexion();
$conexion = $objeto->Conectar();
$consulta = "INSERT INTO prueba (minumero) VALUES ('".$palabra."')";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$conexion=null;

header("Location: ./crear-nota-pedido-2.php");
?>