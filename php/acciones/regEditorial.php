<!DOCTYPE html>
<html>
<head>
  <title> Registros Editoriales</title>
  <link rel="stylesheet" type="text/css" href="../../css/estilo.css" />
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
              <a class="nav-link" href="../../administracion.html">Inicio
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
<h3> Registros de Editoriales </h3>
<hr>
<nav>
 <a href="regEditorial" class="btn btn-primary btn-lg">Registros</a>
<a href="../formularios/frmEditorial.php" class="btn btn-primary btn-lg">Añadir</a>
</nav>
<hr>
<br>
 <?php
          include("../conexionGeneral.php");
          $query="Select * From editoriales";
          $link=mysqli_query($conexion,$query);
          echo ("<table     border=2 align=center>");

          echo ("<thead><tr><th>id</th><th>Nombre</th><th>Editar</th> <th> Eliminar </th></tr></thead>");
          while ($reg= mysqli_fetch_array($link))
          {
            echo "<tr>";
            echo ("<td>$reg[id]</td>");
            echo ("<td>$reg[nombre]</td>");
            echo ("<td><a href=../acciones/eliminarEditorial.php?clave=$reg[id]>Eliminar</a></td>");
            echo ("<td> <a href=editcarrera.php?clave=$reg[nombre]>Editar</a></td>");
            echo ("</tr>");
          }
          ?>
</center>

               <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body> 
</html>