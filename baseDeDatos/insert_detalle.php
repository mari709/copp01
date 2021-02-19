<?php
session_start();
include '../baseDeDatos/conexion_tradicional.php';

$sql_uidnp ="select idnpd from nota_pedidos_detalle order by idnpd desc limit 1";
$sql_uidnp_hacer = mysqli_query($link2,$sql_uidnp);
$sql_uilast = mysqli_fetch_assoc($sql_uidnp_hacer);
$sql_ui = $sql_uilast['idnpd'];//ultimo detalle de nota pedido

$insert_cantidad = $_POST['vCaja2'];
$insert_descuento = $_POST['vCaja3'];
$insert_id_familia = $_POST['vCaja4'];
$insert_id_producto = $_POST['vCaja5'];
$insert_precio_unidad = $_SESSION['psi'];
$insert_precio_subtotal1 =$_SESSION['session_subtotal1'] ;//



if($_SESSION['session_subtotal1'] != '0'){
$insert_ultima_np = $_POST['vCaja6'];
$sql_insert ="insert INTO `nota_pedidos_detalle` (`idnpd`, `idnp`, `cant`, `idproducto`, `precio`, `descuento`, `total`, `estado`, `ano_balance`, `idfamilia`, `comision_cobrador`) 
VALUES (NULL, '".$insert_ultima_np."', '".$insert_cantidad."', '".$insert_id_producto."', '".$insert_precio_unidad."', '$insert_descuento', '".$insert_precio_subtotal1."', '0', '".date("Y")."', '".$insert_id_familia."', '0.0')";
$sql_insert_start = mysqli_query($link2,$sql_insert);
$_SESSION['session_subtotal1'] = '0';
}
?>