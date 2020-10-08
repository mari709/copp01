<?php include("php/vistas/superior.php"); ?>

<i class="fas fa-user"></i> <!-- uses solid style -->
  <i class="far fa-user"></i> <!-- uses regular style -->
  <i class="fal fa-user"></i> <!-- uses light style -->
  <!--brand icon-->
  <i class="fab fa-github-square"></i> <!-- uses brands style -->

  <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>País</th>                                
                                <th>Edad</th>  
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['id'] ?></td>
                                <td><?php echo $dat['nombre'] ?></td>
                                <td><?php echo $dat['pais'] ?></td>
                                <td><?php echo $dat['edad'] ?></td>    
                                <td></td>
                            </tr>
                            <?php
                                }
                            ?>                                
                        </tbody>        
                       </table>                    
                    </div>
                </div>

<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <form id="formPersonas">    
                    <div class="modal-body">
                        <div class="form-group">
                        <label for="nombre" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre">
                        </div>
                        <div class="form-group">
                        <label for="pais" class="col-form-label">País:</label>
                        <input type="text" class="form-control" id="pais">
                        </div>                
                        <div class="form-group">
                        <label for="edad" class="col-form-label">Edad:</label>
                        <input type="number" class="form-control" id="edad">
                        </div>            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                        <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
                    </div>
                </form>    
                </div>
            </div>
        </div>  

<?php include_once("php/vistas/inferior.php"); ?>
