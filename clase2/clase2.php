<?php
/*sintaxis
 function nombre()
 {
     $a=2;
     return $a;
 }*/


 function saludo($nombre)
{
    $b='hola '.$nombre;
    echo($b);
}
saludo('pepe');

//echo saludo('pepe'); ponemos el echo dentro de la funcion

echo('<br>');

function sumar($a,$b)
{
    $res=$a+$b;

    echo($res);
}


sumar(1,2);

echo('<br>');
function parOimpar($num)
{
    $b=$num % 2;
    if ($b=1)
    {
        echo('inpar');
    }
    else
    {
        acosh('par');
    }
}

parOimpar(3);

echo('<br>');
function MoM($numero1,$numero2)
{
    $num1=$numero1;
    $num2=$numero2;
    if($num1 > $num2)
    {
        echo($num1.' es mayor que'.$num2);
    }
    else
    {
        echo($num1.' es menor que '.$num2);
    }
}

MoM(4,2);
echo('<br>');
$a=12;
echo $a++;//primer muestra 12 y despues lo suma
echo('<br>');
echo ++$a;//lo suma y despues lo miuestra





/*vrear dos pag donde la primera contenga  funcion session sirve para que si el usuario no esta logeado si quere entrar lo redirija
a la pag de logeo $_SESSION es una matriz
<?php
session_star();
$_SESSION['nombre']='pepe';
$SESSION['apellido']='terlkñ';
echo $_SESSION['nombre'];



en otra pagina 
sesion_star();
verificar si existe variable
if(isset($_SESSION['nombre']))
{
    echo 'existe';
}
 else
 {
     echo 'no existe';
 }
echo $_SESSION['nombre'];
echo $_SESSION['apellido']; esta pag tiene q mostrar la info de la otra pag

?>*/
?>


