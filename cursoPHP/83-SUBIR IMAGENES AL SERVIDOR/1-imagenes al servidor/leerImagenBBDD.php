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
        require_once('conectar.php');
        $base=Conectar::conexion();
        $consulta=$base->prepare("SELECT IMAGEN FROM artículos  WHERE CODIGO= 1");
        $consulta->execute();

        while($fila=$consulta->fetch(PDO::FETCH_ASSOC))
        {
            $imagen=$fila['IMAGEN'];//rescatamos solo la imagen 
        }

    ?>

        <!-- visulaisamos la imagen -->
    <div>
        <img src="/img/<?php echo $imagen; ?>" alt="galaxia" width="25%">
    </div>
</body>
</html>