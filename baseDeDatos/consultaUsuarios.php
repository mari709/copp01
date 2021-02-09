<?php
include_once '../baseDeDatos/conexion.php';

//consulta comercios
$objeto = new Conexion();
$conexion = $objeto->Conectar();
//$consulta = "SELECT `idviajante` , `viajante`, `estado_viajante`, `comision` FROM `viajantes`";
$consulta = "SELECT `v`.`idviajante`, `viajante`,`comision`,`statusUser`,`email`,IF(`estado_viajante`= 1,\"Habilitado\",\"Deshabilitado\") AS `estado` FROM `viajantes` AS `v` INNER JOIN `datosusuario` as `d` ON (`v`.`idviajante` = `d`.`idViajante`);";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;
?>