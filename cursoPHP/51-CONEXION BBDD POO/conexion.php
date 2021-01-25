<?php

/*la procedimental es la que venimos viendo en archivos anteriores pero la mas recomendada es la orientada a objetos
usando mysqli o lo mas usado PDO*/

 $bdHost="localhost";
 $bd_contraseña="";
 $bd_Usuario="root";
 $bd="cursodephp";
//instanciamos la clase conexion
$conexion= new mysqli("localhost","root","","cursodephp");

//como es un objeto utilizamos la nomenclatura de la flecha que equivale al punto en otros lenguajes para utilizar los metodos de el
// objeto myqli que se almacena en la variable conexion
if($conexion->connect_errno)
{
    echo'FALLO LA CONEXION '.$conexion->connect_errno;//concatenamos para que muestre la pila del error

}
// mysqli_set_charset($conexion,'UTF-8') forma procedimental
$conexion->set_charset('UTF8');//para que muestres acentos y ñ

$consulta= "SELECT * FROM artículos";

//$resultado=mysqli_query($conexion,$sql) forma procedimental
$resultado=$conexion->query($consulta);

if($conexion->errno)
{
    die($conexion->error);//mensaje si hay error en la consulta
}

    //recorremos el resultado
    //$fila=mysqli_fetch_assoc($resultado) forma procedimental
    while($fila=$resultado->fetch_assoc())
    {
        echo "<table><tr><td>";
      // detro de los corchetes seleccionamos los nombres de cada campo
      echo ''.$fila['SECCIÓN'].'</td><td>';
      echo ' '.$fila['PRODUCTOS'].' </td><td> ';
      echo $fila['PRECIO'].' </td><td> ';
      echo $fila['CODIGO'].' </td><td> ';
      echo  $fila['FECHA'].' </td><td><tr/></table> ';
      echo '<br>';
    }

// mysqli_close() forma procedimental

$conexion->close();
?>