<?php

$link2 = mysqli_connect( "localhost", "root", "")
      or die ("no se ha podido conectar");
      mysqli_select_db($link2, "coppens")
      or die("Error al tratar de selecccionar esta base");
?>