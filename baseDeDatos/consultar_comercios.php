<?php
$contador = 0;
include '../baseDeDatos/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$sql2 = "select idc,comercio FROM comercios order by comercio asc";
?>

<select class="form-control" name =clientes >

<?php
    foreach($conexion->query($sql2) AS $resultado)
    {
        $contador++;    
        ?> 
        <option value="<?php echo $resultado ['idc'] ?>"> <?php echo $resultado ['comercio'] ?></option>
        <?php 
    };
    echo "<br>";?>
</select>
