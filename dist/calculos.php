<?php
session_start();
$cantidad = $_POST['valorCaja2'];
$descuento = $_POST['valorCaja3'];
$precio_unidad = $_SESSION['psi'];//

$cant_por_precio_unidad = $cantidad * $precio_unidad;   
$descuento_desc1 = $descuento/100;
$total_con_desc1 = $cant_por_precio_unidad * $descuento_desc1;

$subtotal1 = $cant_por_precio_unidad - $total_con_desc1;

$_SESSION['session_subtotal1'] = $subtotal1;
echo $subtotal1;



?>