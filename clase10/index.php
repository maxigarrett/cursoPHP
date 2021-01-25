<?php
    class Persona
    {
        const EDAD=33;//constante
        public static $nombre='Pedro';
    }

    echo Persona:: EDAD;

    $persona1=new Persona;

    // las contastes se accede con :: si ponemos -> dara error
    echo $persona1:: EDAD;

    echo '<br>';
    echo 'variable estatica: '. Persona:: $nombre;




    echo '<br>';

    // OTREA CLASE
    class Usuario
    {

    }

    $user= new Usuario;

    if($user instanceof Usuario)
    {
        echo 'es instancia de la clase';
        echo '<br>';
        echo 'la clase es: '. get_class($user); //probamos con get_class si el objeto user es de la clase Usuario
    }
    else echo 'no es intancia de la clase'; 

    echo '<br>';
    // DETERMINAR SI EXISTE UNA DETERMINADA CLASE
    if(class_exists('Usuario'))
    {
        echo 'la clase existe';
    }else
    {
        echo 'la clase no existe';
    }
   
?>

