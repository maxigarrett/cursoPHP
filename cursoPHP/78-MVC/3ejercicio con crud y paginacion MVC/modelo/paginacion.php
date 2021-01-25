<?php
    require_once('modelo/conectar.php');

    $base=Conectar::conexion();
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
    }
    else $pagina=1;

    $tamaño_pagina=3;
    $empezar_desde=($pagina -1)*$tamaño_pagina;

    $sqlLimit="SELECT * FROM datos_usuarios";
            
    $resul=$base->prepare($sqlLimit);
            
    $resul->execute(array());
            
    $numFilas=$resul->rowCount();
            
    $totalPaginas=ceil($numFilas/$tamaño_pagina);
            
          

    $resul->closeCursor();



?>