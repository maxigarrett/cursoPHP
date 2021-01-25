<?php
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $destinatario_email=$_POST['email'];//para quien va el mail osea quien lo va a recibir
    $telefono=$_POST['telefono'];
    $asunto=$_POST['asunto'];
    $comentario=$_POST['comentario'];

    // para enviar meils utilisamos la funcion mail() que devulve un boleano y recibe por una seria de parametros que el primero
    // es de tipo string y va el destinatario de correo segundo parametro el asunto ,el tercero seria el mensaje a mandar
    // y caurto y quinto parametro son opcionales, el caurto son los headers que se utiliza para añadir cabeceras extra como
    // si queremos enciar copia del mensaje a mas personas (Cc), copias ocultas(Bcc), codificacion de caracteres que vamos
    // a utilizar y cada linea deveria separarse con un CRLF(\n\r) tambien se usan para separar los header o cabeceras multiples

    $header='MIME-Version: 1.0\r\n';//MIME serie de convencionesque se utiliza a la hs de intercambiar archivos por email 

    // el .= sirve para concatenar con lo demas que tenemos en el header simpre tambien utilizando el salto de linea
    $header.='Content-type: text/html; cahrset=iso-8859-1\r\n';//codificacion de caracteres
    $header.='From MAXI <maxyg22@outlook.es>\r\n';//de donde viene el email que recibira 
    
    // no especificamos los adicionalees parametros pero si lo adicionales headers o cabeceras 
    $exito_Del_Mail= mail($destinatario_email,$asunto,$comentario,$header);


    if($exito_Del_Mail==true)
    {
        echo'mensaje enviado con exito';
    }
    else
    {
        echo 'error';
    }
?>