<?php
 
  class Personas_modelo
    {
       
        private $db;//almacenamos la conexion
        private $personas;//alamacenamos los productos de la BBDD

        public function __construct()
        {
            // a sentencia require_once es idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido 
            // y si es así, no se incluye
            require_once('modelo/conectar.php');

            $this->db=Conectar::conexion();//llamamos a la conexion mediante la clase ya q tiene metodo estatico se usa ::

            $this->personas=array();//le decimos q es un array ya que son varios registros en la BBDD
        }

        public function getPersonas()//funcion para obtener productos
        {
            require_once('modelo/paginacion.php');//apra poder usar las variable para el LIMIT

            $consulta=$this->db->query("SELECT * FROM datos_usuarios LIMIT $empezar_desde,$tamaño_pagina");

            while($fila=$consulta->fetch(PDO::FETCH_ASSOC))
            {
                $this->personas[]=$fila;//cada vuelta de bucle almacena en el array productos lo q se almacena en fila
            }

            return $this->personas;
        }
    }

?>