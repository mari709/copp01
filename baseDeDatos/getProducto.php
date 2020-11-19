<?php
	
	//require ('conexion.php');
	
	$link2 = mysqli_connect( "localhost", "root", "")
	or die ("no se ha podido conectar");
	mysqli_select_db($link2, "coppens")
	or die("Error al tratar de selecccionar esta base");
	


	$id_familia = $_GET['idfamilia'];
	
	$queryM = "SELECT * FROM productos WHERE idfamilia = '".$id_familia."' order by producto";

	echo $queryM;

	//$resultadoM = $mysqli->query($queryM);

	$resultadoM = mysqli_query($link2, $queryM);
	
	$html= "<option value='3'>Selecciona Producto</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['idproducto']."'>".$rowM['producto']."</option>";
	}
	
	echo $html;
?>