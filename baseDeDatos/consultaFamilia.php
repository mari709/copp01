<?php 

    include '../baseDeDatos/conexion.php';


    $query = "SELECT idfamilia,familia FROM productos group by idfamilia";
    //$resultado=$mysqli->query($query);
    $resultado = mysqli_query($link, $query);
	$sql2= "select idnp from nota_pedidos  ORDER BY `nota_pedidos`.`idnp` desc limit 1";
    $query2 = mysqli_query($link,$sql2); //reemplace mysqli por conexion
    $resultado2 = mysqli_fetch_assoc($query2);
    $numero = $resultado2['idnp'];
?>