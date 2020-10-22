<?php
session_name("loginUsuario"); 
session_start();

include_once("metodosDePHP.php");
Seguridad::integridadSistema();
Seguridad::testSeguridad();


# Esta prueba funciona ....
//if($_SESSION["autentificado"] != "Si"){
	//header ("Location: https://drama.fandom.com/es/wiki/Death_note:_L_Change_the_world");
//}

?>
<?php $title = "Registrar Usuarios";
    include("vistas/superior.php"); ?>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    

<!---- Titulo : "Crear Usuario" --------------------------------------------------------------->
<div class="card-header"><h3 class="text-center font-weight-light my-4">Crear usuario</h3>
<?php if($usuarioCreado=="si") { ?> <span style="color:#56e817"> Usuario creado correctamente</span> <?php }  ?> </div>
<!--------------------------------------------------------------------------------------------->

<div class="card-body">

<!----Inicio de clausula "form" -------------->                                        
<form  action="metodosDePHP.php" method="post" id='Formulario'>

<!----Inicio : Fila #1 [Tipo de usuario] : Viajante o Administrador [Estado] : Habilitado o Deshabilitado ---->                                          
<div class="form-row">

<!----Inicio : Indicar tipo de usuario ---->                                                
<div class="col-md-6">
<fieldset>
<legend class="small mb-1">Indique tipo de usuario a crear</legend>
<label for="viajante">
<input id="viajante"  value="viajante" type="radio" name="grupotipoviajante" checked="checked" > Viajante</label>
<label for="administrador">
<input id="administrador" value="administrador" type="radio" name="grupotipoviajante"> Administrador</label>
</fieldset>
</div>
<!---- Fin: Indicar tipo de usuario ---->                                                
                                                
                                                
<!----Inicio : Indicar estado inicial del Viajante/Administrador ---->                                                
<div class="col-md-6">
<fieldset>
<legend class="small mb-1">Estado del Viajante/Administrador</legend>
<label for="eviajanteh"><input id="eviajanteh" value="habilitado" type="radio" name="grupoestadoviajante" checked="checked"> Habilitado</label>
<label for="eviajantea"><input id="eviajantea" value="deshabilitado" type="radio" name="grupoestadoviajante"> Deshabilitado</label>
</fieldset>
</div>
<!----Fin : Indicar estado inicial del Viajante/Adminsitrador ---->


</div>
<!----Fin : Fila #1 ---->                                              
                                            

<!----Inicio: Fila #2 ---->                                            
<div class="form-row">


<!---- Inicio : Campo texto "Nombre" ---->
<div class="col-md-12">
<div class="form-group">
<label class="small mb-1" for="inputFirstName">Nombre de Usuario</label>
<input class="form-control py-4" id="inputFirstName" name="nombreViajante" type="text" placeholder="Ingrese su nombre" required/>
</div>
</div>
<!---- Fin : Campo texto "Nombre" ---->
                                                


</div>
<!----Fin : Fila #2 ---->                                            
                                            

<!----Inicio : Fila #3 ---->                                            

<!---- Inicio : Campo "Email" ---->
<div class="form-group">
<label class="small mb-1" for="inputEmailAddress">Email</label>
<input class="form-control py-4" id="inputEmailAddress" name="direccionEmail" type="email" aria-describedby="emailHelp" placeholder="Ingrese su direccion de email" required />
</div>

<!---- Fin : Fila #3 ----> 


<!---- Inicio : Fila #4 ---->                                            
<div class="form-row">

<!---- Inicio : Password ---->
<div class="col-md-6">
<div  class="form-group">
<label class="small mb-1" for="inputPassword"><div id='ErrorContrasena'>Contraseña</div></label>
<!---- <div id='ErrorContrasena' style="color : red"></div>  ---->
<input class="form-control py-4" id="inputPassword" name="Password" type="password" placeholder="Ingrese contraseña" required />
</div>
</div>


<!---- Inicio : Confirmar Contraseña ---->
<div class="col-md-6">
<div class="form-group">
<label class="small mb-1" for="inputConfirmPassword">Confirmar contraseña</label>
<input class="form-control py-4" id="inputConfirmPassword" name="confirmacionPassword" type="password" placeholder="Confirmar contraseña" required />
</div>
</div>

</div>
<!---- Fin : Fila #4 ---->

<!---- Inicio : Boton de "Submit" ---->
<div class="form-group mt-4 mb-0">
<!----<a class="btn btn-primary btn-block" href="login.html" >Agregar usuario</a>----><!----href="login.html"---->
<input class="btn btn-primary" type="Submit" value="Ingresar">
</div>
<!----Fin : Boton de "Submit" ---->


</form>
<!---- Fin de clausula "form" ---->                                    
                                    
                                    
                                    
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.php">Ya tienes una cuenta? Redirigir a Login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div> <!-- fin layoutAuthentication -->
        </div> <!-- fin layoutAuthentication_content -->


            <!-- </div> -->
           <!--  <div id="layoutAuthentication_footer"></div> -->
        
           <!-- <div id="layoutAuthentication_footer"> -->
            <?php include_once("vistas/footer.php"); ?>
            <!-- </div> -->

        <?php include_once("vistas/scripts.php"); ?>
        <script src="js/funcionesJavaScript.js"></script>

        </body>
    </html>