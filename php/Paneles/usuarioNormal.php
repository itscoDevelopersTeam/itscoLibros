<?php 
session_start();
if($_SESSION) {
	$nombre = $_SESSION['name'];
	$email = $_SESSION['email'];
	echo("<h1>Bienvenido $nombre con el email $email</h1>");
}
else
	header("Location: ../../index.php?mensaje=Usted no se ha logueado");
 ?>

<!DOCTYPE html>

<html>
	<head>
		<title>itscoLibros</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../../css/css/all.css">
		<link rel="stylesheet" type="text/css" href="../../css/main.css">	
	</head>

	<body>
		<a href="../../logout.php">Cerrar sesión</a>
	</body>
</html>