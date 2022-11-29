<div class="modal fade" id="modalFormRol" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <hs class="modal-title" id="exampleModalCenterTitle">Formulario para crear nuevos roles</hs>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Vertically centered modal -->
            <div class="modal-body">
                <!-- <div class="col-md-6"> -->
                    <div class="tile">
                        <h3 class="tile-title">Nuevo rol</h3>
                        <div class="tile-body">
                            <form id="formRol" name="formRol">
                                <div class="form-group">
                                    <label class="control-label">Nombre</label>
                                    <input class="form-control" id="txtNombre" name="txtNombre" type="text" placeholder="Nombre del rol" require="">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Descripcion</label>
                                    <input class="form-control" id="txtDescripcion" name="txtDescripcion" rows="2" placeholder="Ingresa descripcion del nuevo rol" require="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelect1">Estado</label>
                                    <select class="form-control" id="exampleSelect1" name="listStatus" require="">
                                        <option class="1">Activo</option>
                                        <option class="2">Inactivo</option>

                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>