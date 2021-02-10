<?php
session_start();
$_SESSION['psi'] = '0';
include '../baseDeDatos/conexion_tradicional.php';

$id = $_POST['consulta'];

$sql = "select precio_siniva FROM productos_precios
where idproducto ='".$id."'  
ORDER BY `lista`  DESC
limit 1";

$hacer = mysqli_query($link2,$sql);
$num = mysqli_fetch_assoc($hacer);
$showhacer = $num['precio_siniva'];
$_SESSION['psi'] = $showhacer;


echo $showhacer;


?>