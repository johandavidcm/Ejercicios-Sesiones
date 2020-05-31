<?php
    require('../DB/conexion.php');
    class Usuario{
        private $usuario;
        private $clave;
        private $estado;
        private $rol;
        private $conexion;

        
        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }

        public function setClave($clave){
            $this->clave = $clave;
        }
        
        public function __construct()
        {
            $this->conexion = new Conexion();
        }

        public function buscarUsuario($usuario){
            $query = "SELECT * FROM usuario WHERE Usuario = '$usuario'";
            $result = $this->conexion->conexion->query($query);
            if($result->num_rows > 0){
                return true;
            }
            return false;
        }


        public function validarContraseña($usuario, $contrasena){
            $query = "SELECT * FROM usuario WHERE Usuario = '$usuario' AND Clave = '$contrasena'";
            $result = $this->conexion->conexion->query($query);
            if($result->num_rows > 0){
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $this->usuario = $usuario;
                $this->clave   = $contrasena;
                $this->estado  = $row['Estado'];
                $this->rol     = $row['Rol'];
                return true;
            }
            session_start();
            if( array_key_exists( 'intentos', $_SESSION ) ){
                $_SESSION['intentos'] = $_SESSION['intentos'] + 1;
            } else {
                $_SESSION['intentos'] = 1;
            }
            return false;
        }
        public function iniciarSesion(){
            if($this->estado == 1){
                session_start();
                $_SESSION['usuario']  = $this->usuario;
                $_SESSION['clave']    = $this->clave;
                $_SESSION['rol']      = $this->rol;
                $_SESSION['Estado']   = $this->estado;
                $this->actualizarIntentos(0,$this->usuario);
                return true;
            }
            return false;
        }

        public function bloquearUsuario($usuario){
            $query = "UPDATE usuario SET Estado = 0 WHERE Usuario = '$usuario'";
            $result = $this->conexion->conexion->query($query);
            if($result){
                echo "El usuario ha sido bloqueado";
            }
        }

        public function buscarIntentos($usuario){
            $query = "SELECT Intento FROM usuario WHERE Usuario = '$usuario'";
            $result = $this->conexion->conexion->query($query);
            if(!$result){
                die('Ocurrio un error');
            }
            $row = $result->fetch_array(MYSQLI_ASSOC);
            return $row['Intento'];
        }

        public function actualizarIntentos($intentos, $usuario){
            $query = "UPDATE usuario SET Intento = $intentos WHERE Usuario = '$usuario'";
            $result = $this->conexion->conexion->query($query);
            if(!$result){
                die("Ocurrio un error en la consulta");
            }
            return true;
        }
    }

    
?>