<!DOCTYPE html>
<html lang="es">
<head>
	<title>CONSULTA DE OFERTA DE LIBROS</title>
	<meta charset="utf-8">
	<link href="../../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../css/heroic-features.css" rel="stylesheet">
	<?php require_once "../elements/scripts.php" ;?>	
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"> Biblioteca Digital </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="http://localhost:8080/itscoLibros/php/usuarioNormal.php">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8080/itscoLibros/php/form-handlers/consulta.php"> Consulta </a>
            </li>
          <li class="nav-item">
              <a class="nav-link" href="http://localhost:8080/itscoLibros/index.php"> Salir </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<br>
<h1 align="center"> CONSULTA DE OFERTA DE LIBROS </h1>
<h6 align="center"> Busca por autor, titulo algun libro especifico </h6>
<br>
<div id="tableDataTable"></div>

</body>

</html>
<script type="text/javascript">
	$(document).ready(function() {
		$('#tableDataTable').load('../elements/tabla5.php');
	});
</script>