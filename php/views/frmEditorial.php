<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
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
<h3> Registros de Editoriales </h3>
<hr>
<nav>
 <a href="../acciones/regEditorial.php" class="btn btn-primary btn-lg">Registros</a>
<a href="../formularios/frmEditorial.php" class="btn btn-primary btn-lg">Añadir</a>
</nav>
<hr>
<p>
	Si deseas añadir informacion solo rellena los siguientes datos que se te solicitan
	y da clic en el boton agregar, en caso de que este correcto el llenado se te notificara
	inmediatamente si esta correcto o no.
</p>
<form method="GET" action="../form-handlers/add-editorial-handler.php">
	<table>
			<td> Ingresa nombre: </td>
			<td> <input type="text" name="txtNombreEditorial"></td>
		</tr>
		<tr>
			<td> <input type="Submit" value="Agregar"></td>
		</tr>
	</table>
</form>
<a href="../Paneles/usuarioAdmin.php"> Volver a Pagina Principal </a>
</center>


<script src="../../css/jquery/jquery.min.js"></script>
    <script src="../../css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>