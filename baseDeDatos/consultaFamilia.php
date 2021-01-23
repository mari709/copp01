 <?php 

$link = mysqli_connect( "localhost", "root", "")
or die ("no se ha podido conectar");
mysqli_select_db($link, "Coppens")
or die("Error al tratar de selecccionar esta base");


    //$query = "SELECT idfamilia,familia FROM productos group by idfamilia";

$query ="select idfamilia,familia  from productos prod inner join productos_precios prp
on prod.idproducto = prp.idproducto
where prp.lista = 
(select lista from 
(select lista from productos_precios
order by lista DESC
limit 1) as temp)
group by familia
";

    //$resultado=$mysqli->query($query);
    $resultado = mysqli_query($link, $query);
	$sql2= "select idnp from nota_pedidos  ORDER BY `nota_pedidos`.`idnp` desc limit 1";
    $query2 = mysqli_query($link,$sql2); //reemplace mysqli por conexion
    $resultado2 = mysqli_fetch_assoc($query2);
    $numero = $resultado2['idnp'];
?>


 

