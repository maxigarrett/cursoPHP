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
    <title>Inicio</title>

   <!-- CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- PHP -->
    <?php
        include("includes/menu.php");
    ?>

  </head>

  <body>
    <!-- Menú de navegación -->
    <?php menu(); ?>

    <!-- Contenedor principal -->
    <div class="container">

      <!-- Título y subtítulo -->
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5 font-italic">Título de la página de Inicio.</h1>
          <p class="lead">Subtítulo de la página de inicio.</p>
        </div>
      </div> <!-- Fin título y subtítulo -->

    </div> <!-- Fin contenedor principal -->

    <!-- JavaScript -->
    <script src="fontawesome/all.js"></script>
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
