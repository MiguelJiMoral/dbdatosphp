<?php
    
    class Conexion
    {
        
        private $host="localhost";
        private $db="dbdatosphp";
        private $user="root";
        private $pass="";
        private $conectar;

        public function ___construct(){
            $cadenadeconexion = "mysql:host=".$this->host.";dbname=".$this->db."; charset=utf8";
            
            try{
                
                $this->conectar = new PDO($cadenadeconexion,$this->user, $this ->pass);
                $this -> conectar -> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo  "Conexion Exitosa";
            } catch(Exception $e){
                $this -> conectar="Error de Conexion";
                echo "Error: ".$e->getMessage();
            }
        }
        public function AbrirConexion(){

            return $this->conectar;
        }
    }
    $prueba = new Conexion();
     
    
 
?>