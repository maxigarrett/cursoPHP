<?php
session_start();

// variable para contar visitas
if(!isset($_SESSION['contador_visitas']))
{
    $_SESSION['contador_visitas']=1;
}
else
{
    $_SESSION['contador_visitas']++;
    echo('visitas registradas: '.$_SESSION['contador_visitas']);
}


?>