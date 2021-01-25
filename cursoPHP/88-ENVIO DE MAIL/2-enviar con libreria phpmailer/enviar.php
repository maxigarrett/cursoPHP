<?php

    // para trabajar con esta libreria la descargamos de github poniendo en el buuscador phpmailer
    // descomprimimos y los tres archivos que se ven Exception,phpmiler y smtp los copiamos en la carpeta a trabajar


    // ruta a los archivos o librerias
    use  PHPMailer \ PHPMailer \ PHPMailer ; 
    use  PHPMailer \ PHPMailer \ Exception ;

    
    require  ('Phpmailer/Exception.php ') ; 
    require  ('Phpmailer/PHPMailer.php ') ; 
    require  ('Phpmailer/SMTP.php ') ;


    // // La creación de instancias y pasar `true` habilita las excepciones 
    $mail = new PHPMailer(true);
    
    try 
    {
       // Configuración del servidor
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;  // Habilita la salida de depuración detallada $ mail -> isSMTP (); detalla cuando se envia o no 
        $mail->isSMTP();    // Enviar usando SMTP
        $mail->Host       = 'smtp.gmail.com';// Configure el servidor SMTP para enviar a través de gmail si es otro buscar en internet como stmp autllok y dira la config
        $mail->SMTPAuth   = true;                       // Habilitar autenticación SMTP
        $mail->Username   = 'flecha.moll.22@gmail.com';                     // SMTP Nombre de usuario mi email a donde se enviara el correo
        $mail->Password   = 'kenshi222017';                               // SMTP contraseña mi email
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Habilita el cifrado TLS; `PHPMailer :: ENCRYPTION_SMTPS` también aceptó
        $mail->Port       = 587;  // puerto TCP para conectarse 
    
        //Recipients
        $mail->setFrom('flecha.moll.22@gmail.com', 'maxi'); //especificamos al destinatario quien envia el correo
        $mail->addAddress('maxyg22@outlook.es'); // Agregar un destinatario al q se le va a enviar
        // $mail->addAddress('ellen@example.com');               // El nombre es opcional se puede enviar a mas correos
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
    
        // // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // agregar archivo adjunto
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // nombre opcional
    
        // Content
        $mail->isHTML(true);                                  // enviar email en formato HTML
        $mail->Subject = 'este es el asunto';
        $mail->Body    = 'hola este es un correo de prube a este seria el cuerpo del mensaje';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; mensaje alternativo
    
        $mail->send();
        echo 'mensaje enviado correctamente';
    } catch(Exception $e)
    {
        echo " No se pudo enviar el mensaje. Error de envío:".$e -> ErrorInfo;
    }     
 

?>