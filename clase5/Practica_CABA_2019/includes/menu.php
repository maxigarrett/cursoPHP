<?php
function menu () { ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Aplicaciones Web 2019</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"><i class="fas fa-home" data-toggle="tooltip" data-placement="bottom" title="Inicio"></i>
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Ejemplos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="pagina0a.php">Página 0a</a>
              <a class="dropdown-item" href="pagina0b.php">Página 0b</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="pagina0c.php">Página 0c</a>
			  <a class="dropdown-item" href="pagina0d.php">clase 6</a>
			  <a class="dropdown-item" href="pagina0e.php">Página 0e</a>
			  <a class="dropdown-item" href="pagina0f.php">Página 0f</a>
            </div>
          </li> 

          <li class="nav-item">
            <a class="nav-link" href="pagina1.php">Página_1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pagina2.php">Página_2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-user" data-toggle="modal" data-target="#exampleModal"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

        <!-- Modal Usuarios registrados -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Usuarios registrados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Acá va el formulario.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
            </div>
        </div>
        </div>  
<?php
}
?>