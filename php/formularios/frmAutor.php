<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<center>
<nav>
<a href="../acciones/regAutor.php"> Registros </a>
<a href="frmAutor.php"> Añadir </a>
</nav>
<br>
<form action="../form-handlers/add-autor-handler.php" method="GET">
	<table border="2">
		<tr>
			<td> Ingresa nombre: </td>
			<td> <input type="text" name="txtNombreAutor"></td>
		</tr>
		<tr>
			<td> <input type="Submit" value="Agregar"></td>
		</tr>
	</table>
</form>
<a href="../Paneles/usuarioAdmin.php"> Volver a Pagina Principal </a>
</center>
</body>
</html>