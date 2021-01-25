<?php
//que cierre la sesion antes de cerrar la pagina para que cuando otro habra la misma pagina en tu mismo navegador
// no pueda usar tu cuenta
//si o si antes de destruir la sesion hay que reandarla para que el navegador sepa que sesion destruir si no pinemos
// esta linea el navegador no sabra que hacer aunque tengamos una sola session abierta
    session_start();

    session_destroy();

    header("location: formularioLogin.php");
?>