<?php

    //recibimos los datos de la imagen usamos $_FILES para rescatar la imagen podemos almacenar el tamaño con size,el tipo
    // de imagen con type, informacion del directorio temporal donde se almacena la imagen con tmp_name antes de almacenarce
    // en el servidor se crea un directorio temporal es igual a cuado abrimos un archivo de internet sin guardarlo se almaena
    // en un directorio temporal, error almacena un codigod de error por si la subida de imagen da error, el nombre de la imagen
    // con name
    $nombre_imagen=$_FILES['archivoImagen']['name'];//el nombre de la imagen 

    $tipo=$_FILES['archivoImagen']['type'];//jpg png,etc
    
    $tamañoImagen=$_FILES['archivoImagen']['size'];//atamaño en bytes

    // como podemos rescatar el tamaño vamos a ponerle un limite de 1mb
    if($tamañoImagen<=1048576 )
    {
        //el tipo simepre se indentifica  con image/tipo de imagen como jpeg,png,etc
        if($tipo=="image/jpg" || $tipo=="image/jpeg" || $tipo=="image/png" || $tipo=="image/gif")
        {
        //indicamos en que directorio o carpeta queremos guardar la imagen osea dentro de nuestro servidor y estamos trbajando
        // de local en xamp asiq buscamos una carpeta para guardarla y para gaurdarla necesitamos nuestra variable super global
        // $_SERVER y con DOCUMENT_ROOT le decimos que queremos guardar en la raiz de nuestro servidor osea en xamp htdocs y 
        // concatenamos con la carpeta donde queremos almacenar
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/img/';


        //antes de q la imagen llegue a destino osea la carpeta que especificamos arriba tiene que pasar por una carpeta temporal
        // primer parametro es el nombre de la carpeta temporal segundo parametro carpeta de destino donde la queremos pasar
        move_uploaded_file($_FILES['archivoImagen']['tmp_name'],$carpeta_destino.$nombre_imagen);

        }
        else
        {
            echo 'solo formato jpg,png,jpeg,gif';
        }

    }else
    {
        echo 'archivo demasiado grande';
    }

    require_once('conectar.php');
    $base=Conectar::conexion();

    // si ponemos insert lo ara al final de todo por eso ponemos UPDATE para actualizar un registro
    $consulta=$base->prepare("UPDATE artículos  SET IMAGEN= '$nombre_imagen' WHERE CODIGO= 1");
    $consulta->execute();
    echo 'insercion exitosa';

    




?>