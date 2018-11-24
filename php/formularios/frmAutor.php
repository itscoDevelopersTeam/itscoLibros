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
<form action="../acciones/agregarAutor.php" method="GET">
	<table border="2">
		<tr>
			<td> Ingresa nombre: </td>
			<td> <input type="text" name="txtnameAutor"></td>
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