<?php 
    $query = "SELECT idfamilia,familia FROM productos group by idfamilia";
	$resultado=$mysqli->query($query);
	$sql2= "select idnp from nota_pedidos  ORDER BY `nota_pedidos`.`idnp` desc limit 1";
    $query2 = mysqli_query($conexion,$sql2); //reemplace mysqli por conexion
    $resultado2 = mysqli_fetch_assoc($query2);
    $numero = $resultado2['idnp'];
?>