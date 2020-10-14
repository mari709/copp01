<?php $title = "Registrar Usuarios";
    include("vistas/superior.php"); ?>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Crear usuario</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <legend class="small mb-1">Indique tipo de usuario a crear</legend>
                                                        <label for="viajante"><input id="viajante"  value="viajante" type="radio" name="grupotipoviajante"> Viajante</label>
                                                        <label for="administrador"><input id="administrador" value="administrador" type="radio" name="grupotipoviajante"> Administrador</label>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <legend class="small mb-1">Estado del viajante</legend>
                                                        <label for="eviajanteh"><input id="eviajanteh" value="habilitado" type="radio" name="grupoestadoviajante"> Habilitado</label>
                                                        <label for="eviajantea"><input id="eviajantea" value="deshabilitado" type="radio" name="grupoestadoviajante"> Deshabilitado</label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Nombre</label>
                                                        <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Ingresa el nombre" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Apellido</label>
                                                        <input class="form-control py-4" id="inputLastName" type="text" placeholder="Ingresa el apellido" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Ingresa el e-mail" />
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Contraseña</label>
                                                        <input class="form-control py-4" id="inputPassword" type="password" placeholder="Ingresa la contraseña" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Repetir contraseña</label>
                                                        <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Repetir contraseña" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><a class="btn btn-primary btn-block" href="#">Agregar usuario</a></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            <!-- </div> -->
           <!--  <div id="layoutAuthentication_footer"></div> -->
        

           <?php include_once("vistas/footer.php"); ?>
        <?php include_once("vistas/scripts.php"); ?>
        </body>
    </html>