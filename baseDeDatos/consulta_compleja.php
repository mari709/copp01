<?php
include '../baseDeDatos/conexion_tradicional.php';

$sql "select prod.producto,pp.precio_siniva,nota.cant,nota.descuento,nota.total

FROM productos prod inner join nota_pedidos_detalle nota
on prod.idproducto = nota.idproducto
inner join productos_precios pp
on prod.idproducto= pp.idproducto

where nota.idnp = (select idnp FROM `nota_pedidos` order by idnp desc limit 1) and 
pp.lista = (select lista FROM `productos_listas` 
order by lista desc limit 1)";



?>