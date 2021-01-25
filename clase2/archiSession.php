<?php
session_start();

/*boora en el momento
session_unset()*/


/*destruye pero deja seguir utilisando hasta que el usuario se sale de la pagina entonces ahi borrara
session_destroy*/ 

$_SESSION['nombre']='pepe';

echo $_SESSION['nombre'];

?>