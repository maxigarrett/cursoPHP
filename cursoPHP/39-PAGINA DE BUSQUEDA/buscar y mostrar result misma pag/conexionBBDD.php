
<?php
function ejecuta_consulta($labusqueda)
{
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
$consulta="SELECT * FROM artículos WHERE PRODUCTOS LIKE '%$labusqueda%'";

// ejecutamos la consulta primer parametro la conexion segundo parametro la consulta
$resultado=mysqli_query($conexion,$consulta);


while($fila=mysqli_fetch_assoc($resultado))
{
  echo "<table><tr><td>";
  // detro de los corchetes seleccionamos los nombres de cada campo
  echo ''.$fila['PRODUCTOS'].'</td><td>';
  echo ' '.$fila['SECCIÓN'].' </td><td> ';
  echo $fila['PRECIO'].' </td><td> ';
 
  echo  $fila['FECHA'].' </td><td><tr/></table> ';
  echo '<br>';
  
}
mysqli_close($conexion);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        // lo que tenemos que hacer es q cuando pulsa en el boton enviar llame a la funcion ejecuta_consulta y enviar la info a la
        // misma pagina



        $mibusqueda= $_POST['buscar'];
    //esta funcion permite indicarle a que pagina de servidor tiene que ir y va a ser a esta misma diciendole PHPH_SELF
        $mipagina=$_SERVER['PHP_SELF'];


        // si es diferente de nulo entrara en el if para ejecutar la funcion que pide un parametro que va a ser lo que tenga
        // almacenado lo del formulario que es la variable $mibusqueda
        if ($mibusqueda!=null)
        {
            ejecuta_consulta($mibusqueda);
        }
        // si es null le decimos que construya un formulario para enviar la informacion osea q al iniciar la pagina si o si 
        // entra en el else
        else
        {
            echo ("<form action='".$mipagina. "' method='post'>
            <label>BUSCAR</label>
            <input type='text' name='buscar'>
            <input type='submit' value='enviar'>
            </form>");
        }
    ?>
</body>
</html>