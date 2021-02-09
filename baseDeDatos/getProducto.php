<?php
	
	//require ('conexion.php');
	
	$link2 = mysqli_connect( "localhost", "root", "")
	or die ("no se ha podido conectar");
	mysqli_select_db($link2, "coppens")
	or die("Error al tratar de selecccionar esta base");
	
///SELECT * FROM productos WHERE idfamilia = '".$id_familia."' order by producto

	$id_familia = $_GET['idfamilia'];
	
	$queryM =
	"
	SELECT * FROM productos prod inner join productos_precios prec
	on prod.idproducto = prec.idproducto
	where prec.lista =
	(select lista from 
	(select lista from productos_precios
	order by lista DESC
	limit 1) as temp)
	and prod.idfamilia ='".$id_familia."'
    ";



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