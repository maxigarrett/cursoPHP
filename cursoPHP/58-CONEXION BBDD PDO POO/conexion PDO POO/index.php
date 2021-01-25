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
        require('devuelveProductos.php');//incluimos el archivo donde hace la consulta a BBDD y devulve informacion

        $busquedaPais=$_POST['buscaPais'];
        $productos= new devuelveProductos();//llamamos al constructor que dentro de esa clase que llamamos tmb llama al construc conexion

        //llamamos a la funcion que hace la peticion a la BBDD y devulve la informacion pero pide un poarametro que hace de filtro
        //  y le pasamos lo uqe capturamos del input y esto se almacenara en la funcion o metodo de la clase devuelveProductoa.php
        // dentro de el metodo getProductos
        $arrayProductos= $productos->getProductos($busquedaPais);
    ?>


    <?php
       foreach ($arrayProductos as $elemento) 
       {
           echo"<table><tr><td>";
           echo $elemento['SECCIÓN']."</td></tr>";
           echo $elemento['PRODUCTOS']."</td></tr>";
           echo $elemento['FECHA']."</td></tr>";
           echo $elemento['PAIS']."</td></tr>";
           echo $elemento['PRECIO']."</td></tr>";
           echo $elemento['CODIGO']."</td></tr></table>";
       
        }
    ?>
</body>
</html>