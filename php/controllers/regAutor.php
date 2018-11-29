<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<nav>
<a href="regAutor.php"> Registros </a>
<a href="../formularios/frmAutor.php"> Añadir </a>
</nav>
<h1> Registros de Autores </h1>
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
</body>
</html>