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
    require('modelo/paginacion.php');
    
  ?>

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

            foreach($arrayPersonas as $personas): 
        ?>
        <tr>

            <td><?php echo $personas['id']; ?></td>
            <td><?php echo $personas['nombre']; ?></td>
            <td><?php echo $personas['apellido'] ?></td>
            <td><?php echo $personas['direccion'] ?></td>
            <td><a href="borrar.php?id=<?php echo $personas['id'];?>"><input type="button" value="Borrar"></a></td>
           
            <td><a href="modelo/actualizar.php?id=<?php echo $personas['id'];?> & nombre=<?php echo $personas['nombre'];?>
            & apellido=<?php echo $personas['apellido'];?> & direccion=<?php echo $personas['direccion'];?>">
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
        <tr>
            <td>
            <td>
                <?php
                for($i=1;$i<=$totalPaginas;$i++)
                {
                    echo "<a href='index.php?pagina=".$i."'>".$i."</a>";
                }
                ?>
            </td>
            </td>
        </tr>
     </table>
    </form>
  
</body>
</html>