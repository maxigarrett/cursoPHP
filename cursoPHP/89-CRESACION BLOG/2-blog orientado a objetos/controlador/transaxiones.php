<?php
    include_once('../modelo/manejo_objetos.php');
    include_once('../modelo/objeto_blog.php');

    try 
    {
        $miConexion= new PDO("mysql:host=localhost;dbname=cursodephp","root","");
        $miConexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $miConexion->exec('SET CHARACTER SET UTF8');

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
                $destino_ruta='../imagenes/';//ruta de la carpeta que creamos llamada imagenes
    
                // movemos la imagen de la carpeta temporal a la carpeta imagenes que creamos
                move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_ruta . $_FILES['imagen']['name']);
    
                echo' el archivo '.$_FILES['imagen']['name'].' se ha copiado en el directorio de imagenes';
            }
            else
            {
                echo'el archivo no se pudo copiar al directorio de imagenes';
            }
        }
        // instancai de la clase Manejo_objetos($miConexion); que el constructor pide por parametro la conexion
        $Manejo_Objetos=new Manejo_objetos($miConexion);
        // instancia de la clase Objeto_blog
        $blog=new Objeto_blog();
        // establecemos los valores de el formulario a los metodos set de la clase Objeto_blog
        $blog->setTitulo($_POST['titulo']);
        $blog->setFecha(date("y-m-d H:i:s"));
        $blog->setComentario($_POST['comentario']);
        $blog->setImagen($_FILES['imagen']['name']);

        $Manejo_Objetos->insertaContenido($blog);//le pasamos el objeto blog a esta funcion que se encarga de insertar en la BBDD

        echo'<br> entrada de blog insertada correctamente</br>';

    }catch (Exception $e) 
    {
        die("ERROR en la conexion".$e->getMessage());
    }


    header('location:../vista/mostrar_blog');

?>