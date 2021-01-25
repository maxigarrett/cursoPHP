<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        th{border: solid 2px black;}
        td{border: solid 2px rgba(65, 157, 185, 0.486);}
        .input{background-color: chartreuse;}
    </style>
</head>
<body>
    <?php
        //INCLUDE CONEXION
        include("conexion.php");

        $consulta=$base->query("SELECT * FROM datos_usuarios");
        
        //almacenamos los resualtados de la consulta en un array de objetos y como objeto tendran sus propiedades
        //  es decir id,nombre,apellido,direccion osea los campos de la BBDD
        $resultadoUsuarios=$consulta->fetchAll(PDO::FETCH_OBJ);
        //$resultadoUsuarios=$base->query("SELECT * FROM datos_usuarios")->fetchAll(PDO::FETCH_OBJ) forma simplificada

        //PARA EL INSERT DEL FORMULARIOD DE ABAJON DEL TODO
        if(isset($_POST['btInsertar']))
        {
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $direccion=$_POST['direccion'];

            $sql="INSERT INTO datos_usuarios (id,nombre,apellido,direccion) VALUES (null,:nombre,:apellido,:direccion)";

            $resultado=$base->prepare($sql);

            $resultado->execute(array(":nombre"=>$nombre,":apellido"=>$apellido,":direccion"=>$direccion));

            header('location:index.php');//para que referesque la pagina y se vea el nuevo registro actualizado
        }

    ?>
    <h1 style="text-align: center;">CRUD- Create Read Update Delete</h1>

    <!-- aunque este todo dentro de un formulario y ahaya informacion de la BBDD en esta tabla solo se enviara
    la informacion de los input que esta abajo de todo para insertar en la tabla -->
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
      <table style="border:4px solid black; margin: auto;">
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
        </tr>

        <!-- bucle que recorre el arrya de objetos de la BBDD -->
        <?php
            //para mostrar en los tr con la informacion de la BBDD tendremos que meterlo aca adentro del bucle 
            // pero tendriamos que usar muchos concatenamientos usado las llaves del bucle por eso ponemos las dos puntos
            // cerramos la etiqueta php y al final del tr ceeramos el foreach
            foreach($resultadoUsuarios as $usuarios): 
        ?>
        <tr>
            <!-- como es un objeto llamamos a los campo atrvez de la flecha dentro de etiquetas php y mostrara tantas
             filas como registros aya en la BBDD ya que esto esta dentro de un bucle -->
            <td><?php echo $usuarios->id ?></td>
            <td><?php echo $usuarios->nombre ?></td>
            <td><?php echo $usuarios->apellido ?></td>
            <td><?php echo $usuarios->direccion ?></td>
            <td><a href="borrar.php?id=<?php echo $usuarios->id;?>"><input type="button" value="Borrar"></a></td>
           
            <td><a href="actualizar.php?id=<?php echo $usuarios->id;?> & nombre=<?php echo $usuarios->nombre;?>
            & apellido=<?php echo $usuarios->apellido;?> & direccion=<?php echo $usuarios->direccion;?>">
            <input type="button" value="Actualizar"></a></td><!-- pasamos todos los valores por parametro para actualizar-->
        </tr>
            <?php endforeach;?>


        <tr>
            <td></td>
            <td><input class="input" type="text" name="nombre" id=""></td>
            <td><input class="input" type="text" name="apellido" id=""></td>
            <td><input class="input" type="text" name="direccion" id=""></td>
            <td><input type="submit" value="Insertar" name="btInsertar"></td>
        </tr>
     </table>
    </form>
   
</body>
</html>