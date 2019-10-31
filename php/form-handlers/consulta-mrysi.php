<!DOCTYPE html>
<html lang="es">

<head>
	<title>Consulta MCA</title>
	<meta charset="utf-8">
	<link href="../../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../css/estilos.css" rel="stylesheet">
	<link href="../../css/heroic-features.css" rel="stylesheet">
	<?php require_once "../elements/scripts.php"; ?>
</head>

<body>
	<div class="container-fluid">
	<nav class="navbar navbar-expand-lg fixed-top" id="navegacion">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="../../img/logo.png" height="30px">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="http://localhost:80/itscoLibros/php/usuarioNormal.php">Inicio
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="http://localhost:80/itscoLibros/php/form-handlers/consulta.php"> Consulta </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="http://localhost:80/itscoLibros/index.php"> Salir </a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</div>
	<br>
	<h3 align="center"> CONSULTA DE LIBROS MRYSI</h3>
	<br>

	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-header">
						LIBROS
					</div>
					<div class="card-body">
						<div id="tableDataTable"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>
<script type="text/javascript">
	$(document).ready(function() {
		$('#tableDataTable').load('../elements/tabla-libros-mrysi.php');
	});
</script>