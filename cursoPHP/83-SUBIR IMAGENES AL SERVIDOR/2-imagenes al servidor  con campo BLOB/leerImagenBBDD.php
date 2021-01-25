<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        require_once('conectar.php');

        $id="";
        $contenido="";
        $tipo="";

        $base=Conectar::conexion();
        $consulta=$base->prepare("SELECT * FROM archivos  WHERE id= 1");
        $consulta->execute();

        while($fila=$consulta->fetch(PDO::FETCH_ASSOC))
        {
            $id=$fila['id'];
            $nombre=$fila['nombre'];
            $tipo=$fila['tipo'];
            $contenido=$fila['contenido'];
        }

        if($tipo=='image/jpeg'|| $tipo=='image/jpg' || $tipo=='image/gift' || $tipo=='image/png')
        {
            // echo base64_decode($contenido);
            echo "<img src='data:$tipo; base64,".base64_encode($contenido)."'>";
            echo "Tipo .".$tipo;
            echo "ID .".$id;
        }


    ?>

        <!-- visulaisamos la imagen --> 
     <div>
        <img src="data:image/jpeg; base64,<?php echo base64_encode($contenido); ?>" alt="galaxia" width="25%">
        <p><?php echo 'ID: '.$id;?></p>
        <p><?php echo 'TIPO: '.$tipo;?></p>
    </div>
   
</body>
</html>