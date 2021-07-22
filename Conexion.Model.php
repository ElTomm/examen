<?php

class Conexion{

    private $con;

    public funtion__construct()
    {
        this->con = new msqli('localhost', 'root', '', 'trabajo');
    }

    public function getUsers(){
        $query = $this->con->query('SELECT * FROM usuarios');

        $retorno = [];

        while($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;
            $i++;

            return $retorno
        }
    }

    
}

?>