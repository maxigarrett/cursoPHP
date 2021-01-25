<!-- PDO CONSULTAS PREPARADAS 
    al igual que en la programacion procedimental para las consultas preparadas en PDO tambien sigue una serie de pasos
    1- crear la conxion intanciando la clase PDO.
    2- hacer la consulta sql preparada $consultaSQL= SELECT * FROM artículos WHERE PRODUCTO= ?
    3- metodo prepare($consultaSQL) - para crear consultas preparadas que devulve un objeto de tipo PDOPStatement(donde obtenemos
    la tabla virtual con el resultado de la consulta SQL)
    4-una ves tenemos este objeto PDOStatement lo ejecutamos con execute() 
    5-lo asociamos a un array usando fetch()
 -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    $busqueda=$_POST['busquedaProducto'];
        try 
        {
            //PASO 1
            $conexion=new PDO("mysql:local=localhost; dbname=cursodephp","root","");
           
           
            /*PDO :: setAttribute establece un atributo en el identificador de la base de datos.
              PDO :: ATTR_ERRMODE: este atributo se utiliza para informar errores. Puede tener uno
            de los siguientes valores:
                PDO :: ERRMODE_EXCEPTION : este valor arroja excepciones. En el modo de excepción, si 
            hay un error en SQL, PDO lanzará excepciones y el script dejará de ejecutarse. 
                PDO :: ERRMODE_WARNING es 1. El script se ejecutará generando advertencias sobre el error.
                PDO :: ERRMODE_SILENT es 0. El script se ejecutará sin generar ningún error o advertencia.*/
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $conexion->exec("SET CHARACTER SET utf8");

            //PASO 2
            $sql= "SELECT SECCIÓN, PRODUCTOS,PAIS,PRECIO FROM artículos WHERE PRODUCTOS=:n_produc";

            //PASO 3
           $resultado= $conexion->prepare($sql);

           //PASO 4
           //le pasamos a la interrogante de la consulta sql el valor del producto a buscar que es destornillador
           //si hubiera mas parametros tendriamos que ponerlo en el orden que esta la sentencia sql en este caso tenemos un solo
           //que es PRODUCTOS,es decir, que la palabra que pogamos aca se alamcena en la sentencia sql donde está '?' si hubiera mas
           //  signo de interrogacion los pondriamos en orden a la sentencia sql
          // $resultado->execute(array("destornillador"));
          $ok=$resultado->execute(array("n_produc"=>$busqueda));//en ves de poner el string nosotros ponesmo el valor rescatado del input

          if($ok==false)
          {
              die("NO SE ENCOONTRO PRODUCTO");
          }
          else
          {
            while($fila=$resultado->fetch(PDO::FETCH_ASSOC))
            {
                echo'<br>';
                echo "SECCION: ".$fila['SECCIÓN']." PRODUCTOS ".$fila['PRODUCTOS']." PAIS: ". $fila['PAIS']." PRECIO ".$fila['PRECIO'];
            }
          }

            
        }catch (Exception $e)
        {
           die($e->getMessage());
        }
        finally
        {
            $resultado->closeCursor();
            $conexion=null;
        }
    ?>
</body>
</html>