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
    <title>Página_0a</title>

    <!-- CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">    

    <!-- PHP -->
    <?php
        include('includes/menu.php');
       
    ?>

  </head>

  <body class="color-1">
    <!-- Menú de navegación -->
    <?php menu(); ?>i

    <!-- Contenedor principal -->
    <div class="container">

<!-- Título y subtítulo -->
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5 font-italic">Formulario</h1>
          <p class="lead">Uso del formulario</p>
        </div>
      </div> <!-- Fin título y subtítulo -->
  <!--inicio formulario-->
      <form method="post" action="pagina0b.php">
        <div class="col-4">
          <div class="form-group">
          <input name="nombre" type="text" class="form-control" placeholder="nombre">
          <br>
          <input name="apellido" type="text" class="form-control" placeholder="apellido">
        </div>
        <div class="form-group">

        <input name='clave' type="password" class="form-control" placeholder="clave">

        </div>
      </div>

<br>
      <div class="form-group">
       <label for="">experiencia en el lenguaje</label>
       <br>
        <input type="checkbox" name="lenguaje1" value="PHP" id="" checked>PHP
        <br>
        <input type="checkbox" name="lenguaje2" value="pyton" id="">python
        <br>
        <input type="checkbox" name="lenguaje3" value="java" id="">java
        <br>

      <legend> elige la materia</legend>
      <label for="">
      <input type="radio" name="materia" id="" value="apw"> aplicacion web
      </label>


      <label for="">
      <input type="radio" name="materia" id="" value="asp">programcion ASP.net
      </label>

      <label for="">
      <input type="radio" name="materia" id="" value="java">desarrollo java
      </label>

<br>
      <select class="form-group" name="selector1" id="">
        <optgroup>
          <option value="">Consulta</option>
          <option value="">sugerencia</option>
          <option value="">reclamo</option>
        </optgroup>
      </select>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">enviar</button>

       

      </form>

      <!--fin formulario-->
    </div> <!-- Fin contenedor principal -->

    <!-- JavaScript -->
    <script src="fontawesome/all.js"></script>
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
