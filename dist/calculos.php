<?php
session_start();
$descuento = $_POST['valorCaja2'];
$cantidad = $_POST['valorCaja3'];
$precio_unidad = $_SESSION['psi'];

$c = $cantidad * $precio_unidad;
$e = $descuento/100;
$f = $c * $e;


echo $c-$f;
?>