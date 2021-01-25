<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>BLOG</h1>
    <?php
        $base=mysqli_connect('localhost','root','','cursodephp');

        // comprobamos si se conecta a la BBDD
        if(!$base)
        {
            echo 'fallo la conexion';
            exit();
        }  
        
        // mostramos la informacion de la tabla pero mostrara por fecha desendiente(DESC) osea de mayor a menor fecha mas actual
        // a menos actual
        $miConsulta_sql="SELECT * FROM contenido ORDER BY FECHA DESC";

        $resultado=mysqli_query($base,$miConsulta_sql);
        
            while($fila=mysqli_fetch_assoc($resultado))
            {
                echo '<h3>'.$fila['titulo'].'</h3>';
                echo '<h4>'.$fila['fecha'].'</h4>';
                echo "<div style='width:400px'>".$fila['comentario']."</div>";

                if($fila['imagen']!='')//en caso de que si exista imagen
                {
                    echo "<img src='imagenes/".$fila['imagen']."' width='300px'/>"; 
                }

                echo'<hr>';
            }
       

    ?>
</body>
</html>