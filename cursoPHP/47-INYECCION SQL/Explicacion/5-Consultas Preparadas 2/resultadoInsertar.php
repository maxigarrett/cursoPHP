<?php
// VAMOS A EVALUAR LO QUE BUSCO EL USUARIO



// VARIABLES PARA CONECTAR A LA BASE DE DATOS
$db_host="localhost";
    $db_nombreBD="cursodephp";
    $db_usuarioBD="root";
    $db_contraseñaBD="";

  // creamos conexion primero va el servidor despues usuario y contraseña de la base de datos
  $conexion= mysqli_connect($db_host,$db_usuarioBD,$db_contraseñaBD) or die("error en la conexion con la bbdd");

  if(mysqli_connect_errno())
  {
    echo'ERROR!!!! En la conexion';
    exit();
  }
  // conectamos a la base de datos creada llamada tp1 despues de crear la conexion primer parametro la conexion segundo BBDD
  $db=mysqli_select_db($conexion,$db_nombreBD) or die('no se encuentra la base de datos');

  $seccion=$_POST['seccion'];
  $productos=$_POST['productos'];
  $fecha=$_POST['fecha'];
  $pais=$_POST['pais'];
  $precio=$_POST['precio'];
  $codigo=$_POST['codigo'];
 
  // muestre los acentos y demas
  mysqli_set_charset($conexion,'UTF8');

//PASO 1 crear consulta preparada ? al insertar los valores de cada campo van entre interrogantes una para cada campo
  $consulta="INSERT INTO artículos (SECCIÓN,PRODUCTOS,FECHA,PAIS,PRECIO,CODIGO) VALUES (?,?,?,?,?,?)";

  //PASO 2 preparar consulta devulve objeto de tipo mysqli_stmt
  $resultado=mysqli_prepare($conexion,$consulta);

  //PASO 3 unir los parametros que el usuario escribio en el cuadro de texto a la sentencia sql esta funcion pide tres argumentos
  // objeto mysql_stmt , tipo de dato que vamos a utilizar como criterio y en este caso son 6 campos  de tipo String por lo que iran
  // 7 's' y si fuera un campo de tipo de otro dato lo remplazamos por una 'i','d' y el tercer parametro
  // va a ser la variable donde tenemos almacenado lo que el usuario escribio en el input  en este caso son 6 campos
  // devulve true o false si tiene exito o no
  $ok=mysqli_stmt_bind_param($resultado,'ssssss',$seccion,$productos,$fecha,$pais,$precio,$codigo);

  // PASO 4 EJECUTAR CONSULTA 
  // devulve true  o false si tiene exito o no en ejecutar la consulta sql
  $ok=mysqli_stmt_execute($resultado);
  if($ok==false)
  {
    echo'ERROR A EJECUTAR LA CONSULTA';
  }else
  {
    // LOS DEMAS PASO NO TIENEN SENTIDO YA QUE SE UTILIZAN PARA MOSTRAR SINO QUE VAMOS A INSERTAR REGISTROS
    echo "Se Agrego nuevo registro";
  }

  mysqli_close($conexion);
?>