<?php

class conexion{
    private $con;

    public function __construct(){
        $this->con = new mysqli('localhost', 'root','','login_register_db');
    }

    public function getUsers(){
        $query = $this->con->query('SELECT * FROM usuarios');

        $retorno = [];

        $i = 0;

        while($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;
            $i++;
        }

        return $retorno;
    }
}

?>