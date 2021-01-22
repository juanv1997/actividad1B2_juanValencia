<?php

    class conexion{

        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $db = "";
        private $con;
        
        
        
        public  function connect() {
             
            $this->con = mysqli_connect($this->host,$this->user,$this->pass,$this->db);

        }
    }
