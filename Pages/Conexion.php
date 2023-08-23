<?php
    
    class Conexion
    {
        // Declaración de una propiedad
        public $server = "localhost";
        public $user = "root"; 
        public $password = "";
        public $namedb = "data_prueba";
        public $connect = null;
    
        // Declaración de un método
        public function ConexionDB() {
            try {
                $usuario="root"; 
                $password="";
                $this->connect = new PDO("mysql:host=$this->server;dbname=$this->namedb", $this->user, $this->password);    
                $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                               
            }
            catch(PDOException $e)
            {
            echo "La conexión ha fallado: " . $e->getMessage();
            }
        }
        public function GetData($sql){

            return $this->connect->query($sql)->fetchAll();; 
            
        }
    }
   