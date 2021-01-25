<!-- PDO
    estas siglas vienen de Php Data Object. PDO es una especie de libreria que contiene sus funciones para utilizar con php
    y conectar con BBDD y realizar consultas modificacion ,etc.. 
    es un codigo que se situa en un intermedioes decir entre nuestro codigo PHP y lo que son las bases de datos pero igual
    este codigo PDO va dentro de nuestro codigo php aunque trabaje por separado. Este es un lenguaje orientado a objetos 
    
Ventajas a MYSQLI:
    la ventajas es que PDO nos permite conectar con diferentes fuentes de origenes de datos osea no solo mysql sino con otras
    como ORACLE SQLSERVER MYSQL ACCES,etc.. 
    https://www.php.net/manual/es/book.pdo.php API PHP-->
<!DOCTYPE html>
<html lang="es" dir="auto" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        try
        {
            // para conectar a una BBDD PDO necesitamos intanciar la clase PDO y su constructor pide tres argumentos: 1- el host y
            // nombre de la BBDD y para indicarle que vamos a conectar con una BBDD MYSQL se pone mysql:host=localhost.
            // hay que indicarle el nombre de la BBDD con la que queremos conectar que se llama cursodephp tmb como 1er argumento
            // 2-usuario que es root
            // 3-la contraseña
            $bdConexion=new PDO("mysql:host=localhost;dbname=cursodephp","root","");

            echo'CONEXION OK';
            
        }catch (Exception $e)//el catch por si falla la conexion entre aca
        {
            die('ERRO DE CONEXION CON LA BASE DE DATO '.$e->getMessage());//muestra el tipo de error que origino el fallo
        }
        finally//ejecuta si o si tanto si entra por el try o por el catch
        {
            $bdConexion=null;//vaciamos la memoria
        }
    ?>
</body>
</html>