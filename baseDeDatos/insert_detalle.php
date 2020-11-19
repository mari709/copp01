<?php

$link = mysqli_connect( "localhost", "root", "")
or die ("no se ha podido conectar");
mysqli_select_db($link, "coppens")
or die("Error al tratar de selecccionar esta base");

$id_producto = $_POST['select-productos'];
$last = $_POST['last'];


$sql_insert = "INSERT INTO `nota_pedidos_detalle` (`idnpd`, `idnp`, `cant`, `idproducto`, `precio`, `descuento`, `total`, `estado`, `ano_balance`, `idfamilia`, `comision_cobrador`) VALUES 
                   ('null', '".$last."', 'null', '".$id_producto."', '1111', '2222', '3333', '0', 'null', 'null', 'null')";

$hacer = mysqli_query($link,$sql_insert);

header('Location:../dist/crear-nota-pedido-2.php');

?>