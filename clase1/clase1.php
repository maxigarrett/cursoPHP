<?php
$a=12;
echo $a.'<h1>hola </h1>';


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
        <?php
        $e='maxi';
        echo 'hola '.$e;
        echo '<br>';
        //funcion primer parametro es la constante y se gundo el valor de la constante en este caso la cadena 
        //de String
        define('MENSAJE', 'Mensaje De Bienvenida');
        echo MENSAJE;

        echo '<br>';
        echo 'ARREGLOS';
        echo '<br>';
        //ARREGLOS
        $pais[0]='Arg';
        $pais[1]='Bra';
        $pais[2]='Chi';

        echo $pais[0];

      //  $i=0;
       // while($i<3)
        //{
        //    i++;
        //    echo $pais[i];
            
        //}

        $paises=array('argentina','Brazil','Bolivia');//declarar un array
        echo $paises[1];

        $productos['nombres']='pepe';
        $productos['apellido']='rerere';

        echo '<br>';
        echo $productos['nombres'];
        

      //  phpinfo()para poder ver los datos del servidor

      echo '<bfr>';
      echo $_SERVER['SERVER_NAME'];
        ?>
    </main>
</body>
</html>



