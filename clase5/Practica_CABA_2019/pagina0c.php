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
    <title>Página_0c</title>

    <!-- CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">    



    <!-- PHP -->
    <?php

      
        include('includes/menu.php');

        // PREGUNTAMOS SI EXISTE LA VARIABLE 
      if(isset($_POST['buscar']))
      {
        $producto=$_POST['buscar'];
      }
      else
      {
        $producto='ingrese un producto';
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
          <h1 class="mt-5 font-italic">Título de la Página 0c.</h1>
          <p class="lead">Subtítulo de la página 0c.</p>
        </div>
      </div> <!-- Fin título y subtítulo -->


      <!-- action te lleva a la pagina designada que se especifique -->
      <form method="post" action="pagina0c.php">
        <div class="row">
          <div class="col">
            
           <input name="buscar" type="text" class="form-control" placeholder="ingrese producto a buscar">
           <br>
            <button type="submit" class="btn btn-primary">enviar</button>
            <br>
         </div>
        </div>
    </form>

          
          
    <h4>Artìculo a buscar en la base de datos</h4>
      
     <p>el producto es:<?php echo $producto;?> </p>  


    </div> <!-- Fin contenedor principal -->

    <!-- JavaScript -->
    <script src="fontawesome/all.js"></script>
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
