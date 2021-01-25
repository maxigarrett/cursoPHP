<?php
    
    session_start();
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    if($usuario=='admin' and $clave='1234')//si usuario y contraseña es correcto cambia la variable de ssesion a si
    {
        $_SESSION['autorizado']='si';
        header('location:index.php');
    }
    else
    {
        header('location:index.php');//en caso de que usuario yu contraseña sean incorreectos tambier lo redirigimos a index
    }
   
    echo'nombre recibido: '.$nombre;
    echo '<br>';
    echo'clave recibida: '.$clave;
?>