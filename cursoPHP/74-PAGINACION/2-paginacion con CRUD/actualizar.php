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
        

        if(!isset($_POST['botonActualizar']))//si no pulsamos el boton enviar mostrara la informacion que viene de la tabla
        {
            // capturamos los valores que vienen por la URL del boton actualizar del index
            $id=$_GET['id'];
            $nombre=$_GET['nombre'];
            $apellido=$_GET['apellido'];
            $direccion=$_GET['direccion'];
        }else//caso contrario que pulsamos el boton actualizar capturamos los datos y actualizamos los datos en BBDD con sql
        {
            include('conexion.php');
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $direccion=$_POST['direccion'];
            $sql= "UPDATE datos_usuarios SET nombre= :nom , apellido= :ape , direccion= :dir WHERE id=:id";

            $resultado=$base->prepare($sql);
            $resultado->execute(array(":id"=>$id,":nom"=>$nombre,":ape"=>$apellido,":dir"=>$direccion));

            header('location: index.php');
        }

    ?>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <label for="id">ID: <?php echo $id?></label><br>
        <input type="hidden" name="id" value="<?php echo $id ?>"><!--para que no se ve el input pero mandar el valor igual a otro sitio -->
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?php echo $nombre ?>"><br>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" value="<?php echo $apellido ?>"><br>
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" value="<?php echo $direccion ?>"><br>

        <input type="submit" value="Actualizar" name="botonActualizar">
        
    </form>



</body>
</html>