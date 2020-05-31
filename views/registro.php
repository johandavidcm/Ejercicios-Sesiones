<div class="modal fade" id="modal_registro" role="dialog" aria-labelledby="titulo_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="container modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="titulo_modal">Registro</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="registro_usuario">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="nombres">Nombres:</label>
                                <input type="text" name="nombres" id="nombres" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="apellidos">Apellidos:</label>
                                <input type="text" name="apellidos" id="apellidos" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="contrasena">Contraseña:</label>
                                <input type="password" name="contrasena" id="contrasena" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="confirmar_contrasena">Confirmar contraseña:</label>
                                <input type="password" name="confirmar_contrasena" id="confirmar_contrasena"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo electrónico:</label>
                        <input type="email" name="correo" id="correo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección:</label>
                        <input type="text" name="direccion" id="direccion" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="genero">Genero:</label>
                                <select class="form-control" name="genero" id="genero">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="telefono">Teléfono:</label>
                                <input type="number" name="telefono" id="telefono" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
                <div id="error_registro" class="text-danger"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" id="registrar_cliente" class="btn btn-primary">Registrarse</button>
            </div>
        </div>
    </div>
</div>