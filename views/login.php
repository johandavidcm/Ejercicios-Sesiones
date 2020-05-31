<div id="caja" class="container mt-5">
    <h1 class="text-center">INICIAR SESION</h1>
    <form id="ingresar" class="pt-5">
        <div class="form-group">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario" class="form-control">
        </div>
        <div class="form-group">
            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" id="contrasena" class="form-control">
        </div>
        <p id="respuesta" class="text-danger"></p>
        <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
        <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal"
            data-target="#modal_registro">Registrarse</button>
    </form>
</div>