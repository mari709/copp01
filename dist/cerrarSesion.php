<?php

# Seleccionamos la sesion del usuario ....
session_name("loginUsuario"); 
# La empezamos ....
session_start();
# La destruimos ...
session_destroy();
# Y lo redireccionamos a la pagina de "login.php"
header("Location: ./login.php");

?>