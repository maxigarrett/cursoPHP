<?php

// con $_COOKIE['prueba'] es la variable super global y entre los corchetes poenemos como llamamos a la cookie en la 
// otra pagina que la nombramos prueba
// al no especifiacr el timepo de vida de la cookie tenemos que abrir la primer pagina para que se cree la cookie y 
// dejarla abierta ya que si la cerramos automaticamente se borra la cookie
    if(isset($_COOKIE['prueba']))
    {
        echo $_COOKIE['prueba'];
    }
    else
    {
        echo'NO EXISTE TAL COOKIE';
    }



?>