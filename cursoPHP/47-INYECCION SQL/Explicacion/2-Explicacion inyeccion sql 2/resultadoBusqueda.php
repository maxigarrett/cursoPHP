<?php
// VAMOS A EVALUAR LO QUE BUSCO EL USUARIO

// capturamos lo que envia por el fomulario
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

// VARIABLES PARA CONECTAR A LA BASE DE DATOS
$db_host="localhost";
    $db_nombreBD="cursodephp";
    $db_usuarioBD="root";
    $db_contraseñaBD="";

  // creamos conexion primero va el servidor despues usuario y contraseña de la base de datos
  $conexion= mysqli_connect($db_host,$db_usuarioBD,$db_contraseñaBD) or die("error en la conexion con la bbdd");

  // conectamos a la base de datos creada llamada tp1 despues de crear la conexion primer parametro la conexion segundo BBDD
  $db=mysqli_select_db($conexion,$db_nombreBD) or die('no se encuentra la base de datos');

  // muestre los acentos y demas
  mysqli_set_charset($conexion,'UTF8');

  // con esto en la BBDD tenemos un usuario y contraseña con demas informacion y en esta consulta mostrara todos los datos
  // si lo uqe introduciomos en los input es igual a lo q hay en la BBDD mostrra en la informacion
  // para que muestre toda la info en los input de la pagina web pondriamos el USUARIO Paco y CONTRASEÑA 1234' or 'z'='z y nos 
  // mostrara toda la info d ela base de datos
  $consulta="SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña='$contraseña'";

  echo $consulta .'<br>';//me nostrara la consulta sql

  // ejecutamos la consulta primer parametro la conexion segundo parametro la consulta
  $resultado=mysqli_query($conexion,$consulta);


  while($fila=mysqli_fetch_assoc($resultado))
  {
    echo $fila['usuario'].' ';
    echo $fila['contraseña'].' ';
    echo $fila['telefono'].' ';
    echo $fila['direccion'].' ';
      echo '<br>';
      echo'<br>';
  }
  mysqli_close($conexion);
?>