<?php

    if(!$_COOKIE['idioma_seleccionado'])//si la cookie no se creo nos redirige a la pagina de seleccion de idiomas
    {
        header('location:index.php');
    }
    //le decimos si la cooki de idioma_seleccionado se almaceno 'es' que tiene como valor y si existe la cookie
    else if($_COOKIE['idioma_seleccionado']=='es')
    {
        header('location:spanish.php');//me redirige a la pagina en español
    }
    else if($_COOKIE['idioma_seleccionado']=='en')
    {
        header('location:english.php');
    }




?>