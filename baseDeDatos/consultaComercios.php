<?php
include_once '../baseDeDatos/conexion.php';

//consulta comercios
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$consulta = "SELECT `idc`, `comercio`, `localidad`, `provincia`, `direccion`, `codpostal`, `cuit` FROM `comercios`";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;
?>