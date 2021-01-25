<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!-- con la variable global $_SERVER[''] es un array asociativa que si le pasamos en sus corchetes la instruccion
PHP_SELF lo que hace es pedirle al servidor una carga de la pagina en donde estamos osea cuando apretamos el boton
de formulario no nos redirija a otra pagina sino que al pulsar el boton de enviar se ejecute la instruccion de peticion
al servidor de recarga de la pagina donde nos encontramos y la pagina al recargar sera la encargada de  comprobar si el
usuraio y contraseña existen en la base de datos -->
<h1>Introduce tus datos</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="">Usuario</label>
        <input type="text" name="user" id="user">
        <br>
        <label for="">contraseña</label>
        <input type="password" name="pass" id="pass">

        <input type="submit" name="enviar" value="ENVIAR">
    </form> 
</body>
</html>