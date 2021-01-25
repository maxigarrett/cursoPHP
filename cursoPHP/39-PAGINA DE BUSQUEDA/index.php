 <!--ESTA NO HICIMOS NADA MAS QUE MOSTRAR OTRA FORMA DEL USO DE mysqli_fetch_array($resultado,MYSQLI_ASSOC
EL FORMULARIO DE BUSQUEDA Y PAGINA DE BUSQUEDA SON LAS Q USAMOS EN ESTA APLICACION   -->
<!DOCTYPE html>
<html lang="es" dir="auto" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

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

  // creamos consulta con filtro clausula WHERE(DONDE) mostramos todos los articulos donde solo la seccion sea de ceramica
  $consulta="SELECT * FROM artículos WHERE SECCIÓN= 'CERÁMICA'";

  // ejecutamos la consulta primer parametro la conexion segundo parametro la consulta
  $resultado=mysqli_query($conexion,$consulta);

// es lo mismo que usar mysql_fetch_assoc pero con esta nueva funcion requiere otro parametro que ademas del resultado que ejecuta
// la consulta tambien una constante para que podamos usar e indentificar los aaray por nombre de campo osea array asociativos
  while($fila=mysqli_fetch_array($resultado,MYSQLI_ASSOC))
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