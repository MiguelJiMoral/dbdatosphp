<?php
require_once("AutoLoad.php");
    class Acciones extends Conexion {
        private $conexion;


        public function ___construct(){
            $this -> conexion = new Conexion();
            $this -> conexion = @$this -> conexion -> AbrirConexion();
        }

        public function Insertar(String $nombre, int $edad, String $correo){
            $sql= "insert into Datos(nombre, edad, correo) values (:nombre, :edad, :correo)";
            $consulta = @$this ->conexion-> prepare($sql);
            $consulta -> BindValue(":nombre", $nombre);
            $consulta -> BindValue(":edad", $edad);
            $consulta -> BindValue(":correo", $correo);
            $resultado = $consulta -> execute();
            return $resultado;
        }
    }
?>