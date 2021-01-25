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
    <title>Página_0b</title>

    <!-- CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">    

    <!-- PHP -->
    <?php
        include('includes/menu.php');
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $clave=$_POST['clave'];

        if(isset($_POST['lenguaje1']))
        {
          $lenguaje=$_POST['lenguaje1'];
        }
        else
        {
          $lenguaje='';
        }
       
        if(isset($_POST['lenguaje2']))
        {
          $lenguaje2=$_POST['lenguaje2'];
        }
        else
        {
          $lenguaje2='';
        }

       
       
        if(isset($_POST['lenguaje3']))
        {
          $lenguaje3=$_POST['lenguaje3'];
        }
        else
        {
          $lenguaje3='';
        }


        // solo hacemos una porque en los tres input de tipo radio todas tienen como name materia
        $opcion=$_POST['materia'];


        // capturamos el valor selector que es de un desplegable de etiqueta select
        if(isset($_POST['selector1']))
        {
          $opcionesSugerencias=$_POST['selector1'];
        }
        else
        {
          $opcionesSugerencias='ERROR SELECT';
        }
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
          <h1 class="mt-5 font-italic">Título de la Página 0b.</h1>
          <p class="lead">Subtítulo de la página 0b.</p>
        </div>
      </div> <!-- Fin título y subtítulo -->

    </div> <!-- Fin contenedor principal -->
      <br>
      <p>el nombre ingresado es : <?php echo $nombre;?></p>
       <p>el nombre ingresado es : <?php echo $apellido;?></p>
       <p>el nombre ingresado es : <?php echo $clave;?></p>
       <p> el lenguaje 1 : <?php echo $lenguaje;?></p>
       <p>lnguaje 2:<?php echo $lenguaje2;?> </p>
       <p>lnguaje 3:<?php echo $lenguaje3;?> </p>
       <p>radio elegido materia preferida <?php echo $opcion;?></p>
       <p>opcion elegida <?php echo $opcionesSugerencias;?></p>
    <!-- JavaScript -->
    <script src="fontawesome/all.js"></script>
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
