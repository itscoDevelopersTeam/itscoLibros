<!DOCTYPE html>
<html>
<head>
  <title> Registros Editoriales</title>
</head>
<body>
<center>
<nav>
<a href="regEditorial.php"> Registros </a>
<a href="../formularios/frmEditorial.php"> Añadir </a>
</nav>
<h1> Registros de Editoriales </h1>
 <?php
          include("../conexionGeneral.php");
          $query="Select * From editoriales";
          $link=mysqli_query($conexion,$query);
          echo ("<table border=1 align=center>");
          echo ("<tr><td>id</td><td>Nombre</td><td>acciones</td></tr>");
          while ($reg= mysqli_fetch_array($link))
          {
            echo "<tr>";
            echo ("<td>$reg[id]</td>");
            echo ("<td>$reg[nombre]</td>");
            echo ("<td><a href=../acciones/eliminarEditorial.php?clave=$reg[id]>Eliminar</a>---");
            echo ("<a href=editcarrera.php?clave=$reg[nombre]>Editar</a></td>");
            echo ("</tr>");
          }
          ?>
          
          </center>
</body> 
</html>