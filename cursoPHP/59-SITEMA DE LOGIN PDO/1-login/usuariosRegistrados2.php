<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        // hacemos el filtro para que solo muestre a los usuarios registrados simpre antes de mostrar la informacion
        //y lo hacemos iniciando la sesion y comprobamos con isset si la variable super global que biene de 
        // compruebaLogin que almacena al usuario existe con la funcion isset y el signo de admiracion dice lo contrario
        //es decir sino existe
        session_start();
        if(!isset($_SESSION['usuario']))
        {
           
            header('location:formularioLogin.php');
        }
    ?>
    <h1>USUARIOS REGISTRADOS</h1>

    <?php
        echo "USUARIO: ".$_SESSION['usuario']."<br><br>";
    ?>

<a href="usuariosRegistrados3.php">Pagina 3</a>
<a href="usuariosRegistrados1.php">pagina 1</a>
<p>Cerrarr Sesion <a href="cierraSession.php"></a></p>
</body>
</html>