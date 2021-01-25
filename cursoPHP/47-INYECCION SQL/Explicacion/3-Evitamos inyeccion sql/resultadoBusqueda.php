<?php
// VAMOS A EVALUAR LO QUE BUSCO EL USUARIO



// VARIABLES PARA CONECTAR A LA BASE DE DATOS
$db_host="localhost";
    $db_nombreBD="cursodephp";
    $db_usuarioBD="root";
    $db_contraseñaBD="";

  // creamos conexion primero va el servidor despues usuario y contraseña de la base de datos
  $conexion= mysqli_connect($db_host,$db_usuarioBD,$db_contraseñaBD) or die("error en la conexion con la bbdd");


// capturamos lo que envia por el fomulario. Las declaramos despues de la conexion porque la funcion  mysqli_real_scape_string()
// lo uqe hace es utilizar la variable conexion como argumento y si declaramos antes la variables no va a encontrar la conexion
// primer argumento la conexion segundo parametro el string o valor del input a evaluar y ademas le estamos diciendo con esta funcion
//que si hay caracteres extraños que no los tenga en cuenta entonces si queremos usar inyeccion sql vista no funcionara osea or 'z'='z'
$usuario=mysqli_real_escape_string($conexion, $_POST['usuario']);
$contraseña=mysqli_real_escape_string($conexion,$_POST['contraseña']);


  // conectamos a la base de datos creada llamada tp1 despues de crear la conexion primer parametro la conexion segundo BBDD
  $db=mysqli_select_db($conexion,$db_nombreBD) or die('no se encuentra la base de datos');

  // muestre los acentos y demas
  mysqli_set_charset($conexion,'UTF8');

  // con esto en la BBDD tenemos un usuario y contraseña con demas informacion y en esta consulta mostrara todos los datos
  
  $consulta="DELETE FROM usuarios WHERE usuario = '$usuario' AND contraseña='$contraseña'";

  echo $consulta .'<br>';//me nostrara la consulta sql

  // ejecutamos la consulta primer parametro la conexion segundo parametro la consulta
 if(mysqli_query($conexion,$consulta))
 {
   if(mysqli_affected_rows($conexion)>0)//esta funcion pide como argumento a la conexion devulve 1 si encontro registro sino 0
   {
    echo'consulta procesada';
   }
   else
   {
     echo 'no se encontraron registro a borrar';
   }
   
 }
 


  mysqli_close($conexion);
?>