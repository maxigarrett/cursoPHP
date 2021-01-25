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

  $pais=$_POST['buscar'];
 
  // muestre los acentos y demas
  mysqli_set_charset($conexion,'UTF8');

//PASO 1
  $consulta="SELECT CODIGO, SECCIÓN, PRECIO, PAIS FROM artículos WHERE PAIS = ? ";

  //PASO 2 preparar consulta devulve objeto de tipo mysqli_stmt
  $resultado=mysqli_prepare($conexion,$consulta);

  //PASO 3 unir los parametros que el usuario escribio en el cuadro de texto a la sentencia sql esta funcion pide tres argumentos
  // objeto mysql_stmt , tipo de dato que vamos a utilizar como criterio y en este caso PAIS es de tipo texto y el tercer parametro
  // va a ser la variable donde tenemos almacenado lo que el usuario escribio en el input 
  // devulve true o false si tiene exito o no
  $ok=mysqli_stmt_bind_param($resultado,'s',$pais);

  // PASO 4 EJECUTAR CONSULTA 
  // devulve true  o false si tiene exito o no en ejecutar la consulta sql
  $ok=mysqli_stmt_execute($resultado);
  if($ok==false)
  {
    echo'ERROR A EJECUTAR LA CONSULTA';
  }else
  {
    //si va todo bien va el resto del codigo
    //PASO 5 MOSTRAR EL RESULTADO 
    // con esta funcion pide por parametro el objeto stmt y tantas variables como campos tenga la consulta sql o la BBDD
    // y en el orden que se encuntre en la consulta sql o como va en la BBDD si seleccionamos todos los campos
    $ok=mysqli_stmt_bind_result($resultado,$codigo,$seccion,$precio,$pais);

    //PASO 6 LEER LA CONSULTA
    echo"articulos encontrados <br>";
    while(mysqli_stmt_fetch($resultado))//recorremos el resultado de lo que devulve la sentencia sql
    {
      echo $codigo.' '.$seccion.' '.$precio.' '.$pais.'<br>';
    }
  }

  mysqli_close($conexion);
?>