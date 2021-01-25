<?php
    class Productos_modelo
    {
        private $db;//almacenamos la conexion
        private $productos;//alamacenamos los productos de la BBDD

        public function __construct()
        {
            // a sentencia require_once es idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido 
            // y si es así, no se incluye
            require_once('modelo/conectar.php');

            $this->db=Conectar::conexion();//llamamos a la conexion mediante la clase ya q tiene metodo estatico se usa ::

            $this->productos=array();//le decimos q es un array ya que son varios registros en la BBDD
        }

        public function getProductos()//funcion para obtener productos
        {
            $consulta=$this->db->query("SELECT * FROM artículos");

            while($fila=$consulta->fetch(PDO::FETCH_ASSOC))
            {
                $this->productos[]=$fila;//cada vuelta de bucle almacena en el array productos lo q se almacena en fila
            }

            return $this->productos;
        }
    }

?>