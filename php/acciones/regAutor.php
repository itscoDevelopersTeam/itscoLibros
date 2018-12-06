<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link href="../formularios/startbootstrap-heroic-features-gh-pages/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../formularios/startbootstrap-heroic-features-gh-pages/css/heroic-features.css" rel="stylesheet">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Biblioteca Digital</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../frmLibros.php">Libros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../frmAutor.php">Autores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../frmEditorial.php">Editoriales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../frmEditorial.php">Usuarios</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<center>
<h1> Registros de Autores </h1>
 <hr size="4">
 <?php
          include("../conexionGeneral.php");
          $query="Select * From autores";
          $link=mysqli_query($conexion,$query);
          echo ("<table border=1 align=center>");
          echo ("<tr><td>Id</td><td>Nombre</td><td>acciones</td></tr>");
          while ($reg= mysqli_fetch_array($link))
          {
            echo "<tr>";
            echo ("<td>$reg[id]</td>");
            echo ("<td>$reg[nombre]</td>");
            echo ("<td><a href=../acciones/eliminarAutor.php?clave=$reg[id]>Eliminar</a>---");
            echo ("<a href=editcarrera.php?clave=$reg[nombre]>Editar</a></td>");
            echo ("</tr>");
          }
          ?>
          </center>
          <script src="../formularios/startbootstrap-heroic-features-gh-pages/vendor/jquery/jquery.min.js"></script>
    <script src="../formularios/startbootstrap-heroic-features-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>