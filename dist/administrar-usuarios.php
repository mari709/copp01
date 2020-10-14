<?php
session_name("loginUsuario"); 
session_start();

include_once("metodosDePHP.php");
Seguridad::integridadSistema();
Seguridad::testSeguridad();
?>

<?php $title = "Administrar usuarios";
    include("vistas/superior.php"); ?>

        <!--INICIO CONTENIDO PRINCIPAL-->
            <main>
                <div class="container-fluid">
                
                    <!--<h1 class="mt-4">nombre de la pagina actual</h1> -->
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Administrar usuarios</li>
                    </ol>
            </main>

    <?php include_once("vistas/footer.php"); ?>
    <?php include_once("vistas/scripts.php"); ?>
    </body>
</html>
