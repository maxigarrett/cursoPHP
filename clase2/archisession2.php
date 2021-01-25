<?php
/* esto muestra lo que hay en el archivo archisesion.php en caso de q exista mostrara existe sino el otro mensaje
session_start();
if (isset($_SESSION['nombre']))
{
    echo ('existe');
}
else
{
    echo 'no existe';
}
*/
session_start()

if(!isset($_SESSION['nombree']))
{
    $_SESSION['nombree']=1;//si existe valdra 1

}
else
{
    $_SESSION['nombree']=++;//en caso de que no exista crea la variable dentro del array
}

echo($_SESSION['nombree']);

?>