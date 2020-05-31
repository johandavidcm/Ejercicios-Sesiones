<?php
    class Conexion{
        
        public $conexion;
        public function __construct()
        {
            $this->conexion = new mysqli('localhost','root','','ejercicios');
            $this->conexion->set_charset('utf8');
        }
    }
    
?>