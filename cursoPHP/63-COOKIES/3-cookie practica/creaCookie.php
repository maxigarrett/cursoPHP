<?php
    // creamos cookie donde captura de la url el idioma seleecionado que mandamos por parametro a traves de la imagen y le decimos
    // que dure 1 mes si seleccionamos la bandera española se mandará por parametro de url 'es' si hacemos clic en bandera inglesa
    // capturara la url con el valor 'en'
    setcookie('idioma_seleccionado',$_GET['idioma'],time()+300);

    header('location:ver_cookie.php');





?>