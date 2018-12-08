<?php 
session_start();
$username = "";

if($_SESSION) {
	$username = $_SESSION['name'];
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
		<h1>Bienvenido <?php echo($username); ?></h1>
		<a href="../../logout.php">Cerrar sesión</a>
	</body>
</html>