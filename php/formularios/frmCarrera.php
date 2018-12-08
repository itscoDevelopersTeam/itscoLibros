<!DOCTYPE html>
<html lang="es">
<head>
	<title> Carreras</title>
	 <link href="../../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/heroic-features.css" rel="stylesheet">
</head>
<body>
<?php
include("menu.php");
?>
<br><br><br>
<center>
<nav>
	<a href="frmCarrera.php"> Añadir </a>
	<a href="../acciones/regCarrera.php"> Registros </a>
</nav>
<form method="GET" action="../acciones/agregarCarrera.php">
	<table>
		<tr>
		<td> Ingresa clave de la carrera </td>
		<td> <input type="text" name="txtclaveCarrera"></td>
		</tr>
		<tr>
			<td> Ingresa nombre: </td>
			<td> <input type="text" name="txtnameCarrera"></td>
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
<script src="../../css/jquery/jquery.min.js"></script>
    <script src="../../css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>