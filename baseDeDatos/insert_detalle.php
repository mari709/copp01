<?php
include '../baseDeDatos/conexion_tradicional.php';

/*
$insert_cantidad = $_POST['vCaja2'];
$insert_descuento = $_POST['vCaja3'];
$insert_id_familia = $_POST['vCaja4'];
$insert_id_producto = $_POST['vCaja5'];
$insert_precio_unidad = $_SESSION['psi'];
$insert_precio_subtotal1 =$_SESSION['session_subtotal1'] ;
$insert_ultima_np = $_POST['last'];
*/
$sql_insert = "insert INTO `pruebas` (`id_insercion`, `cantidad`, `descuento`, `id_familia`, `id_producto`, `precio_unidad`, `precio_subtotal1`, `ultima_nota_pedido`) VALUES (NULL, '2', '2', '2', '2', '2', '2', '2');";
$sql_insert_start = mysqli_query($link2,$sql_insert);

echo $sql_insert_start;
?>