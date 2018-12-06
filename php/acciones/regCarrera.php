<!DOCTYPE html>
<html>
<head>
	<title> Registros de carreras </title>
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/heroic-features.css" rel="stylesheet">
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
              <a class="nav-link" href="startbootstrap-heroic-features-gh-pages/index.html">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../formularios/frmLibros.php">Libros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../formularios/frmAutor.php">Autores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../formularios/frmEditorial.php">Editoriales</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="../formularios/frmCarrera.php">Carreras</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<br><br><br>
<center>
<nav>
<a href="regCarrera.php"> Registros </a>
<a href="../formularios/frmCarrera.php"> Añadir </a>
</nav>
<h1> Registros de Carreras </h1>
 <?php
          include("../conexionGeneral.php");
          $query="Select * From carreras";
          $link=mysqli_query($conexion,$query);
          echo ("<table border=1 align=center>");
          echo ("<tr><td>Clave</td><td>Nombre</td><td>acciones</td></tr>");
          while ($reg= mysqli_fetch_array($link))
          {
            echo "<tr>";
            echo ("<td>$reg[clave]</td>");
            echo ("<td>$reg[nombre]</td>");
            echo ("<td><a href=../acciones/eliminarCarrera.php?clave=$reg[clave]>Eliminar</a>---");
            echo ("<a href=editcarrera.php?clave=$reg[nombre]>Editar</a></td>");
            echo ("</tr>");
          }
          ?>
          
          </center>
          <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>