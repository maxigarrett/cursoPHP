<?php

//llammos al archivo donde esta las variables de conexion
require('config.php');

class Conexion//clase
{
    protected $conexion_db;

    public function Conexion()//constructor
    {
        $this->conexion_db=new mysqli(DB_HOST,DB_USUARIO,DB_CONTRA,DB_NAME);//llamamos al constructor mysql y le pasamos las constantes

        if($this->conexion_db->connect_errno)//por si la conexion falla
        {
            echo'FALLO AL CONECTAR MYSQL: '.$this->conexion_db->connect_error;
            return;
        }
        
        $this->conexion_db->set_charset(DB_CHARSET);
    }
}

?>