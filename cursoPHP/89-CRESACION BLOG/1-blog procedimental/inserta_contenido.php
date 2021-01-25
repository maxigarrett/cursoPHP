<?php
    $base=mysqli_connect('localhost','root','','cursodephp');

    // comprobamos si se conecta a la BBDD
    if(!$base)
    {
        echo 'fallo la conexion';
        exit();
    }




    if($_FILES['imagen']['error'])
    {
        // el $_FILES lanza errores para corroborar cual es tiene valores de 1 a .... mostramos los mas comunes
        switch ($_FILES['imagen']['error']) 
        {
            case 1://error exceso de tamaño de archivo en php.ini
                echo 'el tamaño exede lo permitido por el servidor';
            break;
            
            case 2://error tamaño archivo marcado desde formulario 
                echo'el tamaño del archivo exede 2MB';
            break;
            
            case 3://corrupcion de archivos, fallo la subida
                echo'el envio de archivo se interrumpio';
            break;

            case 3://no escogio imagen
                echo'no se ha enviado ningun archivo';
            break;
        }
    }
    else//cuando todo va bien
    {
        echo'archivo se subio correctamente<br>';
        // preguntamos si existe la imagen con el nombre y si la excepcion de error con la constante indica que esta todo bien
        if((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error']==UPLOAD_ERR_OK)))
        {
            $destino_ruta='imagenes/';//ruta de la carpeta que creamos llamada imagenes

            // movemos la imagen de la carpeta temporal a la carpeta imagenes que creamos
            move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_ruta . $_FILES['imagen']['name']);

            echo' el archivo '.$_FILES['imagen']['name'].' se ha copiado en el directorio de imagenes';
        }
        else
        {
            echo'el archivo no se pudo copiar al directorio de imagenes';
        }
    }

    $el_titulo=$_POST['titulo'];
    $la_fecha=date("y-m-d H:i:s");//formato para fecha(año mes dia) y hs(hs min seg) no capturamos del fomulario
    $el_cometario=$_POST['comentario'];
    $la_imagen=$_FILES['imagen']['name'];


    $consulta_sql="INSERT INTO contenido(id,titulo,fecha,comentario,imagen) VALUES(NULL,'$el_titulo','$la_fecha','$el_cometario','$la_imagen')";

    $resultado=mysqli_query($base,$consulta_sql);

    mysqli_close($base);

    echo'<br> se ha agregado el comentario<br><br>';




?>