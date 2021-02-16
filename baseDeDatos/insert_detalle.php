<?php
session_start();
include '../baseDeDatos/conexion_tradicional.php';
$insert_cantidad = $_POST['vCaja2'];
$insert_descuento = $_POST['vCaja3'];
$insert_id_familia = $_POST['vCaja4'];
$insert_id_producto = $_POST['vCaja5'];
$insert_precio_unidad = $_SESSION['psi'];
$insert_precio_subtotal1 =$_SESSION['session_subtotal1'] ;
$insert_ultima_np = $_POST['vCaja6'];
$sql_insert = "insert INTO `pruebas` (`id_insercion`, `cantidad`, `descuento`, `id_familia`, `id_producto`, `precio_unidad`, `precio_subtotal1`, `ultima_nota_pedido`)



VALUES (NULL, '".$insert_cantidad."', '".$insert_descuento."', '".$insert_id_familia."', '".$insert_id_producto."', '".$insert_precio_unidad."', '".$insert_precio_subtotal1."', '".$insert_ultima_np."');";
$sql_insert_start = mysqli_query($link2,$sql_insert);

echo $sql_insert_start;

$show ="";
$show .= $insert_ultima_np;

echo $show;

?>