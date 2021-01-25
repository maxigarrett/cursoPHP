<!DOCTYPE html>
<html lang="es">

  <head>
    <!-- Etiquetas meta necesarias -->  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="trabajo practico aplicaciones web">
    <meta name="author" content="">

    <!-- Ícono de la solapa -->
    <link href="img/logo_unlz.jpg" rel="shortcut icon" type="image/vnd.microsoft.icon" />    

    <!-- Solapa de la página -->
    <title>Páginapagina 6</title>

    <!-- CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">    

    <!-- PHP -->
    <?php
        include('includes/menu.php');
    ?>


      <!-- creamos la conexion y consulta a base de dato -->
      <?php
      // conexion a base de datos variables or die en caso de no conexion muestra un mensaje
        $usuario='root';
        $clave='';
        $servidor='localhost';
        $basededatos='tp1';


        // creamos conexion
        $conexion=mysqli_connect($servidor,$usuario,$clave) or die('no se ah podido conectar');

        // conecto a la base de datos
        $db=mysqli_select_db($conexion,$basededatos) or die('no se ah podido conectar al servidor');

        // creamos consulta ese AS usuario es un alias  para que devuleva bien la consulta
        $consulta= 'SELECT COUNT(DISTINCT usuario) AS usuarios FROM usuario';

        // ejecutar consulta SQL
        $resultado=mysqli_query($conexion,$consulta) or die('no se pudo ejecutar la consulta');


        // obtenemos y guardamos los resultados mysqli_fetch_assoc(fila)
        while($fila=mysqli_fetch_assoc($resultado))
        {
          $cantidad_usuarios=$fila['usuarios'];
          
        }


        // creamos una consulta SQL usando una variable
        $rol='administrador';
        $consulta2="SELECT COUNT(DISTINCT usuario) AS usuarios2 FROM usuario WHERE rol='$rol'";
        $resultado2=mysqli_query($conexion,$consulta2) or die('error en la ejecucion de la segunda consulta');
        while($fila2=mysqli_fetch_assoc($resultado2))
        {
          $cantidad_DeAdmin=$fila2['usuarios2'];
        }


        $rol2='analista';
        
        $consulta3="SELECT COUNT(DISTINCT usuario) AS usuarios3 FROM usuario WHERE rol='$rol2' and length(clave)=4";
        $resultado3=mysqli_query($conexion,$consulta3) or die('error en la ejecucion de la segunda consulta');
        while($fila3=mysqli_fetch_assoc($resultado3))
        {
          $cantidad_DeAn=$fila3['usuarios3'];
        }
        



        // traemos todo la tabla
        $consulta4="SELECT * FROM usuario";
        $resultado4=mysqli_query($conexion,$consulta4) or die('error en la ejecucion de la 4 consulta');
        
        // cerramos conexio
        mysqli_close($conexion);
      ?>



  </head>

  <body class="color-1">
    <!-- Menú de navegación -->
    <?php menu(); ?>

    <!-- Contenedor principal -->
    <div class="container">

      <!-- Título y subtítulo -->
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5 font-italic">conexion a base de datos.</h1>
          <p class="lead">Subtítulo de la página 0d.</p>

          <!-- mostramos lo que hay en la base de datos -->
          <?php echo 'usuarios cargados '. $cantidad_usuarios?>
          <br>
          <?php echo 'rol de administrador '. $cantidad_DeAdmin?>
          <br>
          <?php echo 'rol de analista '. $cantidad_DeAn?>
        <br>
        <br>

        <!-- mostramos toda la tabla-->
        <div class="row">
          <div class="table-responsive">
            <table class="table table-border table-sm table-hover table-dark">
              <thead>
                <tr>
                  <th>Usuario</th>
                  <th>Clave</th>
                  <th>Rol</th>
                </tr>
              </thead>

              <tbody>
              
                <?php
                
                while($columna=mysqli_fetch_array($resultado4))
                {
                 echo "<tr>";
                 echo "<td>".$columna['usuario']."</td>
                  <td>".$columna['clave']."</td>
                  <td>".$columna['rol']."</td>    
                   </tr>";
                }
                
              ?>
              
              </tbody>
            </table>
          </div>
        </div>
          
        </div>
      </div> <!-- Fin título y subtítulo -->

    </div> <!-- Fin contenedor principal -->

    <!-- JavaScript -->
    <script src="fontawesome/all.js"></script>
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
