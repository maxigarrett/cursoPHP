<?php
    require('conexion.php');

    class devuelveProductos extends Conexion//eredamos de la clase conexion para usar sus metodos 
    {
        public function devuelveProductos()
        {
            // llamamos al constructor de la clase padre que es conexion utilizando parent
            parent::Conexion();
        }

        public function getProductos($dato)//pedimos un parametro que va a ser el filtro a buscar en la sentencia sql
        {
            $consulta="SELECT * FROM artículos WHERE PAIS= :pais";

            $resultado=$this->conexion_db->prepare($consulta);

            $resultado->execute(array(':pais'=>$dato));

            if($resultado==false)
            {
                echo'consulta erronea';
            }
            else echo'consulta exitosa';
            //para poder usar array asociados al nombre de los campos de la BBDD con la funcion fetch_all y lo almacenamos en
            // la variable productos
            $productos=$resultado->fetchAll(PDO::FETCH_ASSOC);

            $resultado->closeCursor();
            return $productos;

            $this->conexion_db=null;
        }
    }
?>