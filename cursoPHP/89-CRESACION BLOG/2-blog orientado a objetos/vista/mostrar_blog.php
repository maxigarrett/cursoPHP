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
        include_once('../modelo/manejo_objetos.php');
        include_once('../modelo/objeto_blog.php');

        try
        {
            $miConexion= new PDO("mysql:host=localhost;dbname=cursodephp","root","");
            $miConexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $miConexion->exec('SET CHARACTER SET UTF8');


            $Manejo_Objetos=new Manejo_objetos($miConexion);

            //obtenemos los resultados d la instruccion por sql ordenada por fecha y devulve un array
            $tabla_blog=$Manejo_Objetos->getContenidoPorFecha();

            if(empty($tabla_blog))//funcion uqe verifica si no hay nada osea si la variable esta vacia
            {
                echo'no hay entradas de blog';
            }
            else
            {
                //recorremos el array y lo almacenamos dentro de $valor que ya tiene un objeto blog que contiene get y set
                foreach ($tabla_blog as $valor)
                {   
                    echo "<h1>".$valor->getTitulo()."</h1>";//<!--llamamos a los get para obtener lo q esta alamcenado en BBDD-->
                    echo"<h2>".$valor->getFecha()."</h2>";
                    echo" <div style='width: 400px;'>";
                    echo $valor->getComentario();
                    echo"</div>";
                    if($valor-> getImagen()!="")
                    {
                        echo"<img src='../imagenes/";
                        echo$valor->getImagen(). "'whidth='300px;'";
                    }  
                    
                    echo'<hr/>';
                }
            }

        }catch(Exception $e)
        {
            die("ERROR en la conexion".$e->getMessage());
        }
        
    ?>
    <br>
    <a href="index.php"> volver</a>

    <!-- REVISAR POR QUE CON ESTE CODIGO NO ME ANDA Y CON LOS ECHO SI ANDAN 
                    < foreach ($tabla_blog as $valor):?>
                    <h1><?php $valor->getTitulo(); ?></h1> llamamos a los get para obtener lo q esta alamcenado en BBDD
                    <h2><?php $valor->getFecha(); ?></h2>
                    <div style="width: 400px;">
                    <h4><?php $valor->getComentario(); ?></h4>
                    </div>
                    <?php if($valor-> getImagen()!=""):?>
                        <img src="../imagenes/<?php $valor-> getImagen()?>" alt="imagen" width="300px" height="200px" >
                    <?php endif;?>
                    
                    
            <?php// endforeach;?>  -->
</body>
</html>