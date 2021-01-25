<?php



class Conexion//clase
{
    protected $conexion_db;

    public function Conexion()//constructor
    {
        try 
        {
            $this->conexion_db=new PDO("mysql:host=localhost;dbname=cursodephp","root","");

            $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $this->conexion_db->exec('SET CHARACTER SET UTF8');

            return $this->conexion_db;
        } catch (Exception $e) 
        {
            die('ERROR '.$e->getMessage());
            die('Linea de ERROR '.$e->getLine());//linea de codigo que encuentra el error
        }
        finally
        {
        
        }
        
        
    }
}

?>