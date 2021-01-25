<!-- PDO CONSULTAS PREPARADAS MARCADORES
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

    $busquedaSeccion=$_POST['busquedaSeccion'];
    $busquedaPais=$_POST['busquedaPais'];
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

            //PASO 2 sustituimos el interrogante para usar marcadores y su sintaxis es ( :nombre cualquiera)
            // se utiliza mas para consultas de mas de un criterio
            $sql= "SELECT SECCIÓN, PRODUCTOS,PAIS,PRECIO FROM artículos WHERE SECCIÓN= :seccion AND PAIS=:pais";

            //PASO 3
           $resultado= $conexion->prepare($sql);

           //PASO 4
           //ahora para usar el marcador usamos array asociativo y dentro ponemos el marcador seguido de la asociacion que le 
            //vamos a dar osea asociamos un valor al marcador para que se almacena en el marcador que hay en la sentencia sql
            //y ese valor el el input capturado en la variable busqueda asntes hay q utilizar =>  
            // en este caso tenemos dos asique vamos a utilizar los dos marcadores de las sentencia SQL y en el orden
            // en que estan los marcadores
          $ok=$resultado->execute(array(":seccion"=>$busquedaSeccion,":pais"=>$busquedaPais));//en ves de poner el string nosotros ponesmo el valor rescatado del input

          if($ok==false)
          {
              die("NO SE ENCOONTRO PRODUCTO");
          }
          else
          {
            //   PARA USAR fetchAll NECESITAMOS UN BUCLE FOR y fetch solo un while
            // $resultados=$resultado->fetchAll(PDO::FETCH_ASSOC);
            // foreach ($resultados as $fila)
            // {
            //     echo'<br>';
            //     echo "SECCION: ".$fila['SECCIÓN']." PRODUCTOS ".$fila['PRODUCTOS']." PAIS: ". $fila['PAIS']." PRECIO ".$fila['PRECIO'];
            // }
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