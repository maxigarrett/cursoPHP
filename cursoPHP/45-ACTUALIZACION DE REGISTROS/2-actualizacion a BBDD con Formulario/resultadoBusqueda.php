<?php
// VAMOS A EVALUAR LO QUE BUSCO EL USUARIO

// capturamos lo que envia por el fomulario
$busqueda=$_POST['buscar'];

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

//   por parametros de busqueda le ponemos lo que capturamos del formulario que enviamos a esta pagina de comproobacion
// la variable se llama busqueda si no ponemos los caracteres comodin no andará ya que  si algun producto contiene caracteres
// ademas del nombre del producto no lo buscará por ejemplo ponemos caballero pero en realidad en la BBDD se encuentra 
// CAMISA CABALLERO y el operador igual lo sustituimos por un like
  $consulta="SELECT * FROM artículos WHERE PRODUCTOS LIKE '%$busqueda%'";

  // ejecutamos la consulta primer parametro la conexion segundo parametro la consulta
  $resultado=mysqli_query($conexion,$consulta);


  while($fila=mysqli_fetch_assoc($resultado))
  {
     // echo "<table><tr><td>";
    // en ves de mostrar la informacion en una tabla la hacemos aparecer en un formulario entonces podemos escribir es ese formulario
    //y cuando escribimos al enviarlo capturamo su name con el nuevo valor y actaulizamos en la otra pagina que redirecciona a esta
      echo "<form action='actualizaBBDD.php' method='POST'>";
      echo "<input type='text' name='cod_art' value=".$fila['CODIGO']."><br>";
      echo "<input type='text' name='cod_pro' value=".$fila['PRODUCTOS']."><br>";
      echo "<input type='text' name='seccion' value=".$fila['SECCIÓN']."><br>";
      echo "<input type='text' name='precio' value=".$fila['PRECIO']."><br>";
      echo "<input type='text' name='fecha' value=".$fila['FECHA']."><br>";
      echo "<input type='text' name='pais' value=".$fila['PAIS']."><br>";
      
      echo "<input type='submit' name='enviando'  value='actualizar'>";
      echo "</form>";
      echo '<br>';
      echo'<br>';
      echo "<p>" .$fila['usuario']."</p>";
  }
  mysqli_close($conexion);
?>