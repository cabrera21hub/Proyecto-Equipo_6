<?php
    class DBConnection{
       
        public $connection;

        public function __construct(){
            require_once('Config/config.php');
            $this->connection=new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            if($this->connection->connect_error){
                die('Error al conectar a la base de datos : '.$this->connection->connect_error);
            }
        }
        public function getConnection(){
            return $this->connection;
        }
        public function closeConnection(){
            $this->connection->close();
        }
    }
?>