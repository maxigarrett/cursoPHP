<?php
    require('conexion.php');

    class devuelveProductos extends Conexion//eredamos de la clase conexion para usar sus metodos 
    {
        public function devuelveProductos()
        {
            // llamamos al constructor de la clase padre que es conexion utilizando parent
            parent::Conexion();
        }

        public function getProductos()
        {
            $consulta="SELECT * FROM artículos";

            $resultado=$this->conexion_db->query($consulta);
            if($resultado==false)
            {
                echo'consulta erronea';
            }
            else echo'consulta exitosa';
            //para poder usar array asociados al nombre de los campos de la BBDD con la funcion fetch_all y lo almacenamos en
            // la variable productos
            $productos=$resultado->fetch_all(MYSQLI_ASSOC);

            return $productos;//devulve productos con la consulta
        }
    }
?>