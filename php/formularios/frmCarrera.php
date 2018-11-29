<!DOCTYPE html>
<html lang="es">
<head>
	<title> Carreras</title>
</head>
<body>
<center>
<nav>
	<a href="frmCarrera.php"> Añadir </a>
	<a href="../acciones/regCarrera.php"> Registros </a>
</nav>
<form method="GET" action="../form-handlers/add-carrera-handler.php">
	<table>
		<tr>
			<td> Ingresa clave de la carrera </td>
			<td> <input type="text" name="txtIdCarrera"></td>
		</tr>
		<tr>
			<td> Ingresa nombre: </td>
			<td> <input type="text" name="txtNombreCarrera"></td>
		</tr>
		<tr>
			<td> <input type="Submit" value="Agregar"></td>
		</tr>
	</table>
</form>
<a href="../Paneles/usuarioAdmin.php"> Volver a Pagina Principal </a>
<?php
if(isset($_GET['mensaje']))
{
	$message = $_GET['mensaje'];
	echo "<h1> $message </h1>";
}
?>
</center>
</body>
</html>