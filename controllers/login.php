<?php

    require('../models/usuario.php');

    $usuario    = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $objusuario = new Usuario();
    if(!$objusuario->buscarUsuario($usuario)){
        echo "No existe el usuario";
    } else {
        $objusuario->setUsuario($usuario);
        $objusuario->setClave($contrasena);
        if($objusuario->validarContraseña($usuario,$contrasena)){
            if($objusuario->iniciarSesion()){
                echo true;
                die();
            }
            echo "La cuenta se encuentra bloqueada";
        }
        else{
            $intentos = $objusuario->buscarIntentos($usuario);
            if($intentos<5){
                if($objusuario->actualizarIntentos($intentos+1, $usuario)){
                    echo "Intentos restantes: ".(4 - $intentos);
                }
            } else {
                $objusuario->bloquearUsuario($usuario);
            }
            echo "<br>Clave Incorrecta";
        }
    }
    
?>