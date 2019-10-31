<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/estilos.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/heroic-features.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"> 
          <img src="../img/logo.png" height="30px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:80/itscoLibros/php/form-handlers/consulta.php"> Consulta </a>
            </li>
          <li class="nav-item">
              <a class="nav-link" href="http://localhost:80/itscoLibros/index.php"> Salir </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row mt-5 d-flex justify-content-center text-center">

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="../img/programacion.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title"> MRYSI </h4>
              <p class="card-text">Checa todos los libros relacionados con la Maestría en Redes y Sistemas Integrados </p>
            </div>
            <div class="card-footer">
              <a href="http://localhost:80/itscoLibros/php/form-handlers/consulta-mrysi.php" class="btn boton">Go!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="../img/gestion.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title"> MCA  </h4>
              <p class="card-text"> Checa todos los libros relacionados con la Maestría en Computación Aplicada</p>
            </div>
            <div class="card-footer">
              <a href="http://localhost:80/itscoLibros/php/form-handlers/consulta-mca.php" class="btn boton">Go!</a>
            </div>
          </div>
        </div>

      <!-- /.row -->
    </div>


    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; ItscoDevelopersTema S.A. de C.V. </p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>