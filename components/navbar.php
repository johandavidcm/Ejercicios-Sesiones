<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Ejercicios</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio</a>
            </li>
        </ul>
            
        <form id="form_buscar" class="form-inline my-2 my-lg-0">
            <input id="buscar" name="buscar" class="form-control mr-sm-2" type="text" placeholder="Buscar">
            <button id="btn_buscar" class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
        </form>
        <button id="cerrar_sesion" class="btn btn-outline-danger my-2 my-sm-0 ml-2" type="button">Cerrar Sesión</button>
    </div>
</nav>

<?php
    require('./components/confirmacion.php');
    echo datosAlModal('CERRAR SESIÓN', '¿Está seguro de que desea cerrar la sesión actual?');
?>