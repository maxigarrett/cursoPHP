

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

    $insertaSeccion=$_POST['insertaSeccion'];
    $insertaProducto=$_POST['insertaProductos'];
    $insertaFecha=$_POST['insertaFecha'];
    $insertaPais=$_POST['insertaPais'];
    $insertaPrecio=$_POST['insertaPrecio'];
    $insertaCodigo=$_POST['insertaCodigo'];
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

            $conexion->exec("SET CHARACTER SET UTF8");

           
            $sql= "INSERT INTO artículos(SECCIÓN,PRODUCTOS,FECHA,PAIS,PRECIO,CODIGO) VALUES(:seccion,:productos,:fecha,:pais,:precio,:codigo)";

            //PASO 3
           $resultado= $conexion->prepare($sql);

            //PASO 4
          $resultado->execute(array(":seccion"=>$insertaSeccion,":productos"=>$insertaProducto,":fecha"=>$insertaFecha,":pais"=>$insertaPais,":precio"=>$insertaPrecio,":codigo"=>$insertaCodigo));

          echo'INSERCION DE REGISTRO CORRECTA';
            
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