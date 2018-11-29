<!DOCTYPE html>
<html>
<head>
	<title> Registros de carreras </title>
</head>
<body>
<center>
<nav>
<a href="regAutor.php"> Registros </a>
<a href="../formularios/frmAutor.php"> Añadir </a>
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
</body>
</html>