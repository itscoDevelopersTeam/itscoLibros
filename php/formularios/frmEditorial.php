<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<center>
<nav>
	<a href="frmEditorial.php"> Añadir </a>
	<a href="../acciones/regEditorial.php"> Registros </a>
</nav>
<form method="GET" action="../acciones/agregarEditorial.php">
	<table>
			<td> Ingresa nombre: </td>
			<td> <input type="text" name="txtnameEditorial"></td>
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