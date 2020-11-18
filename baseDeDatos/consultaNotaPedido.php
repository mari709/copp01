<?php
include_once '../baseDeDatos/conexion.php';

//consulta nota pedido
//$objeto = new Conexion();
//$conexion = $objeto->Conectar();

$sql  = "SELECT idnp,fecha FROM nota_pedidos";
$resultado = mysqli_query($link, $sql);
//$data = mysqli_fetch_assoc($resultado);


//$resultado = $conexion->prepare($consulta);
//$resultado->execute();
//$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

//print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
//$conexion=null;
