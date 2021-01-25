<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../programasphp/clase5/bootstrap/css/bootstrap.css" rel="stylesheet">    
    <?php
    
   //  include('../programasphp/clase5/includes/menu.php');
     session_start();

     if(!isset($_SESSION['autorizado']))//si no existe la sesion iniciado la inicializamos a no
     {
        $_SESSION['autorizado']='no';
     }
   ?>
</head>
<body>

<?php
    if($_SESSION['autorizado']=='no'){?> 
    <form action="verificarDatos.php" method="post">

    <label for="user">usuario</label>
     <input type="text"id="user" name='usuario' require>
     <br>
     <label for="pass">constraseña</label>
     <input type="password"id="pass" name='clave'>
     <br>
     <input type="submit" value="enviar">
     
    </form>
   <?php }    else echo 'biemvenido';  ?>
    
</body>
</html>
