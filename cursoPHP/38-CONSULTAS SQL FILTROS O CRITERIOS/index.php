
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table
    {
        width: 50%;
        border: 1px solid red;
        margin: auto;
        text-align: center;
    }
    </style>
</head>
<body>
<?php

// incluimos las variables de coneccion
require("archivoConectar.php");
  // creamos conexion primero va el servidor despues usuario y contraseña de la base de datos
  $conexion= mysqli_connect($db_host,$db_usuarioBD,$db_contraseñaBD) or die("error en la conexion con la bbdd");

  // conectamos a la base de datos creada llamada tp1 despues de crear la conexion primer parametro la conexion segundo BBDD
  $db=mysqli_select_db($conexion,$db_nombreBD) or die('no se encuentra la base de datos');

  // muestre los acentos y demas
  mysqli_set_charset($conexion,'UTF8');

  // creamos consulta con filtro clausula WHERE(DONDE) mostramos todos los articulos donde solo la seccion sea de ceramica
  $consulta="SELECT * FROM artículos WHERE SECCIÓN= 'CERÁMICA'";

  // ejecutamos la consulta primer parametro la conexion segundo parametro la consulta
  $resultado=mysqli_query($conexion,$consulta);

  // en resultado se almacena lo que devulve la consulta sql y recorremos con un bucle
  // obtenemos y guardamos los resultados mysqli_fetch_assoc(resultado) en la variable fila
  while($fila=mysqli_fetch_assoc($resultado))
  {
      echo "<table><tr><td>";
      // detro de los corchetes seleccionamos los nombres de cada campo
      echo ' '. $fila['SECCIÓN'].' </td><td> ';
      echo $fila['NOMBRE ARTÍCULO'].' </td><td> ';
     
      echo  $fila['FECHA'].' </td><td><tr/></table> ';
      echo '<br>';
      
  }
  mysqli_close($conexion);
?>
</body>
</html>