<?php
$contador = 0;
include '../baseDeDatos/conexion.php';
$sql2 = "select idc,comercio FROM comercios order by comercio asc";
?>

<select class="form-control" name =clientes >

<?php
    foreach($link->query($sql2) AS $resultado)
    {
        $contador++;    
        ?> 
        <option value="<?php echo $resultado ['idc'] ?>"> <?php echo $resultado ['comercio'] ?></option>
        <?php 
    };
    echo "<br>";?>
</select>