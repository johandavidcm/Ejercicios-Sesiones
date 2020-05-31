<?php 
    function datosAlModal($titulo, $mensaje){
        return "<div id='modal_confirmacion' class='modal fade' tabindex='-1' role='dialog'>
                    <div class='modal-dialog' role='document'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title'>$titulo</h5>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                            </div>
                            <div class='modal-body'>
                                <p>$mensaje</p>
                            </div>
                            <div class='modal-footer'>
                                <button id='confirmacion_boton' type='button' class='btn btn-primary'>Aceptar</button>
                                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>";
    }
?>