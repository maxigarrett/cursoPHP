<?php


    $nombre_archivo=$_FILES['archivo']['name'];//el nombre de la imagen 

    $tipo_archivo=$_FILES['archivo']['type'];//jpg png,etc
    
    $tamaño_archivo=$_FILES['archivo']['size'];//atamaño en bytes

    // como podemos rescatar el tamaño vamos a ponerle un limite de 3mb
    if($tamaño_archivo<=3048576 )
    {
       
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/img/';

        move_uploaded_file($_FILES['archivo']['tmp_name'],$carpeta_destino.$nombre_archivo);

    }else
    {
        echo 'archivo demasiado grande';
    }

    require_once('conectar.php');
    $base=Conectar::conexion();

    // FUNCION FOPEN() esta funcion admite dos parametro, el primero la ruta al archivo  y segundo parametro el permiso, es decir,
    // si va a ser de escritura de lectura o ambas 
    $archivo_objetivo=fopen($carpeta_destino.$nombre_archivo,'r');


    // funcion FREAD() nos pide dos argumentos la variable donde almacenamos la ruta del archvio con el permiso y el tamaño
    // del archivo que queremos almacenar en la BBDD que lo optenemos con ['size'] esta funcion lee los bytes que forman el 
    // archivo a leer
    $lectura_archivo_bytes=fread($archivo_objetivo,$tamaño_archivo);

    //apra q escape a los caracteres extaños y no de error ya que en el campo BLOB de la base de datos puede mostrar 0bytes
    // porque tiene conflicto con la ruta  a leer
    $lectura_archivo_bytes=addslashes($lectura_archivo_bytes);
    fclose($archivo_objetivo);//cerramos el flujo 
   
    $resultado=$base->prepare("INSERT INTO archivos (id,nombre,tipo,contenido) VALUES (null,'$nombre_archivo','$tipo_archivo','$lectura_archivo_bytes')");
    
    $resultado->execute();

    
    
    if($resultado->rowCount()>0)
    {
        echo 'insercion exitosa';
        header('location:leerImagenBBDD.php');
    }
    else
    {
        echo'error de insercion';
    }
    


?>