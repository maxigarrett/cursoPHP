<?php

    class Conectar
    {
        //metodo estatico para la conexion donde con solo acceder la clase accedemos al metodo sin nececidad de instanciar
        public static function conexion()
        {
            try 
            {
                $conexion= new PDO('mysql:host=localhost;dbname=cursodephp','root','');
                $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $conexion->exec('SET CHARACTER SET UTF8');


                return $conexion;
            }catch (Exception $e)
            {
                die('ERROR!!! '.$e->getMessage());
                echo'Linea de error '.$e->getLine();
            }

            
        }
    }

?>