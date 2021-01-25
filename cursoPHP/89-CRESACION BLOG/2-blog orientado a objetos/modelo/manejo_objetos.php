<?php

    include_once('objeto_blog.php');
    class Manejo_objetos
    {
        // en esta clase vamos a manipular los objetos creados en objeto_blog.php
        // desde esta clase vamos a introducir informacion en la BBDD y la vamos a extraer tambien 

        private $conexion;

        public function __construct($conexion)
        {
            $this->setConexion($conexion);//metodo para hacer la conexion
        }


        public function setConexion(PDO $conexion)//parametro que sera una instancia de PDO
        {
            $this->conexion=$conexion;
        }


        // metodo para obtener la informacion almacenada en la BBDD 
        // obtener las entradas de blog
        public function getContenidoPorFecha()
        {
            $matriz=array();

            //para pasar de registro a registro dentro de esta matriz por ejemplo hay 10 entradas de blog en el array de arriba
            // y para acceder a la 1, o la 2,etc utilizaremos la variable contador
            $contador=0;

            $consulta_sql=$this->conexion->query("SELECT * FROM contenido ORDER BY fecha");
           

            while($registro=$consulta_sql->fetch(PDO::FETCH_ASSOC))
            {
                $blog=new Objeto_blog();//instancia del objeto blog de objeto_blog.php

                $blog->setId($registro['id']);//con la funcion set id que pide por parametro el id le pasamos el id de la BBDD
                $blog->setTitulo($registro['titulo']);
                $blog->setFecha($registro['fecha']);
                $blog->setComentario($registro['comentario']);
                $blog->setImagen($registro['imagen']);
                
                //cada vuelta de bucle en el array va a arrancar de  0 osea que contador vale 0 y en esa posicion se almacenará
                // la primer vuelta de bucle osea todo lo que hay en la primer fila de la base de datos que se almacena en blog
                $matriz[$contador]=$blog; 

                //aumentamos el contador para que la siguiente vuelta de bucle valga 1 masosea ira aumentando en 1
                $contador++;
            }
            return $matriz;
        }


        
        
        //METODO PARA INTRODUCIR INFORMACION EN LA BASE DE DATOS
        public function insertaContenido(Objeto_blog $blog)
        {
            $sql="INSERT INTO contenido (id,titulo,fecha,comentario,imagen) VALUES (NULL,'" .$blog->getTitulo(). "','".$blog->getFecha()."','".
            $blog->getComentario()."','".$blog->getImagen()."')";
            
            $this->conexion->exec($sql);//ademas de ejecutar la sentencia para los caracteres utf8 tambien ejecuta sentencias sql
        }
    }





?>