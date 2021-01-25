<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        include('conexion.php');
        $sql="SELECT * FROM datos_usuarios";
        $sentencia=$base->prepare($sql);
        $sentencia->execute();
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);

        $articulos_por_pagina=3;

        $total_articulos_bd=$sentencia->rowCount();

        $total_paginas=ceil($total_articulos_bd/$articulos_por_pagina);
        
    ?>
    <?php
       if(isset($_GET['pagina']))
       {
           if($_GET['pagina']==1)
           {
               header('location:index.php'); 
           }
           else
           {
               $pagina=$_GET['pagina'];
           }
       }else//si no ah echo cli la $pagina=1
       {
           $pagina=1;//la pagina en la que estamos y bien iniciamos en nuestra pag web
       }


      $empezar_desde=($pagina -1)* $articulos_por_pagina;

      $sqlLimit="SELECT * FROM datos_usuarios LIMIT :inicio,:total";
      $sentencia_sql=$base->prepare($sqlLimit);
      $sentencia_sql->bindParam(':inicio',$empezar_desde,PDO::PARAM_INT);//apra decirle que es formato numero entero
      $sentencia_sql->bindParam(':total',$articulos_por_pagina,PDO::PARAM_INT);
      $sentencia_sql->execute();
      $resutado_sql=$sentencia_sql->fetchAll(PDO::FETCH_ASSOC);
    ?>


    <?php foreach($resutado_sql as $usuarios) :?>
    <div>
        <?php
            echo$usuarios['nombre'];
            echo$usuarios['apellido'];
        ?>
    </div>
    <?php endforeach; ?>


    <div class="container">
        <ul class="paginacion" style="text-decoration: none;">
            <!-- $_GET['pagina'] va a traer la pagina actual en donde estamos y le resta uno osea que va a retroceder -->
            <li class="paginacionItems"><a href="index.php?pagina=<?php echo $_GET['pagina'] -1; ?>">previus</a></li>

            <?php for($i=0;$i<$total_paginas;$i++) :?>
            <li class="paginacionItems"><a href="index.php?pagina=<?php echo $i+1?>"><?php echo $i+1?></a></li>
            <?php endfor; ?>


            <li class="paginacionItems"><a href="index.php?pagina=<?php echo $_GET['pagina'] +1; ?>">next</a></li>
        </ul>
    </div>
</body>
</html>