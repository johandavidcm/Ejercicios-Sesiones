$(document).ready(function(){
    $('#ingresar').submit(function(e){
        e.preventDefault();
        let data = $(this).serializeArray();
        $.ajax({
            type: "POST",
            url: "../controllers/login.php",
            data: data,
            success: function (response) {
                if(response == 1){
                    location.reload();
                } else {
                    $('#respuesta').html(response);
                }
            }
        });
    });

    $('#cerrar_sesion').on('click', function(){
        $('#modal_confirmacion').modal('show');
        $('#confirmacion_boton').on('click',function(){
            $.post('../controllers/cerrar_sesion.php', function(){
                location.reload();
            });
        });
    });

    // $( document ).on('click keyup keypress keydown blur change mousemove', function(e){

    // });
});