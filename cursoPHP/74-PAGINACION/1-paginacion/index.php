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

        include('conexion.php');

        // la sentencia admite un parametro que se denomina limit y tiene dos parametros el primero seria cual es el primer
        // registro que queres ver seria el 0 como los arrays, y el segundo cauntos registros a partir de ese 0 quieres ver
        // con limit le decimos que arranque de 0 hata la posicion 3, si hay 50 registro solo mostrara los primero 3
        // $sql="SELECT * FROM artículos WHERE SECCIÓN='DEPORTE' LIMIT 0,3";

        $tamaño_paginas=5;//cautas lineas tiene que mostrar


        if(isset($_GET['pagina']))//se ejecuta este codigo si el usuario a echo cli en algun numero
        {
            if($_GET['pagina']==1)
            {
                header('location:index.php');//si hizo clic en el numero 1 redirecciona a la misma pagina donde muestra el sql normal
            }
            else//si no hizo clic en el 1 sino en cualquuier otro pues pagina vale en donde hizo clic y ese valor lo capuramos de la
                //URL de la paginacion que esta abajo 
            {
                $pagina=$_GET['pagina'];
            }
        }else//si no ah echo cli la $pagina=1
        {
            $pagina=1;//la pagina en la que estamos y bien iniciamos en nuestra pag web
        }




       
        
        /*en esta variable almacenamos el valor de pagina-1 osea queda en 0 y multiplicamos por tamaño_pagina que vale 3
        osea 0*3 es igual a 0 pero si el usuario pulsa en el numero 2 en la paginacion entonces $pagina valdra 2 -1 es 
        igual a 1 y pir tamaño_paginas que vale 3 queda 3*1=3  entonces en la consulta sql donde esta limit ponemos como
        primer valor que es de donde empieza $empezarDesde que es donde se almacena el calculo y como el usario quiere ir a la
        segunda pagina con el calculo que ya hicimos mostrara de la posicion 3 en adelante */
        $empezarDesde=($pagina-1)*$tamaño_paginas;

        $sql="SELECT * FROM artículos";

        $resultado=$base->prepare($sql);

        $resultado->execute(array());

        $numFilas=$resultado->rowCount();//contamos las filas nos devulve la consulta sql
        //si nos devulve 9 registros y lo dividimos por el tamaño_paginas osea que divida ese resultado de registros y que 
        //muestre tres por pagina en este caso porque si tenemos miles de resultados mostrariamos mas 
        $total_paginas=ceil($numFilas/$tamaño_paginas);//ceil redondea

        echo 'numero de registro de la consulta: '.$numFilas.'<br>';
        echo'Mostramos: '.$tamaño_paginas.' por pagina '.'<br>';
        echo'Mostrando la pagina: '.$pagina.' de '.$total_paginas.'<br>';

        $resultado->closeCursor();

        // $sqlLimite="SELECT * FROM artículos  LIMIT $empezarDesde,$tamaño_paginas";
        // $resultado=$base->prepare($sqlLimite);
    
        // $resultado->execute(array());
    
        // while($fila=$resultado->fetch(PDO::FETCH_ASSOC))
        // {
        //     echo'<br>';
        //     echo 'SECCION: '.$fila['SECCIÓN'].' PRODUCTOS: '.$fila['PRODUCTOS'].' FECHA: '.$fila['FECHA'].'  PAIS:  '. 
        //     $fila['PAIS'].'  PRECIO:  '.$fila['PRECIO'].'  CODIGO:  '.$fila['CODIGO'];
        // }
        
    
        $sqlLimite="SELECT * FROM artículos  LIMIT $empezarDesde,$tamaño_paginas";
        $resultado=$base->prepare($sqlLimite);
    
        $resultado->execute(array());
    
        while($fila=$resultado->fetch(PDO::FETCH_ASSOC))
        {
            echo'<br>';
            echo 'SECCION: '.$fila['SECCIÓN'].' PRODUCTOS: '.$fila['PRODUCTOS'].' FECHA: '.$fila['FECHA'].'  PAIS:  '. 
            $fila['PAIS'].'  PRECIO:  '.$fila['PRECIO'].'  CODIGO:  '.$fila['CODIGO'];
        }
        


        echo'<br>   ';
        // -------------------------------PAGINACION-----------------------------------------------------
        for($i=1;$i<=$total_paginas;$i++)
        {
            echo"<a href='?pagina=".$i."'>"  . $i . "</a> ";
        }
       
        

   
        
    ?>
</body>
</html>