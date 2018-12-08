<!DOCTYPE html>
<html lang="es">
<head>
	<title> Carreras</title>
	 <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/heroic-features.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Biblioteca Digital</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../../administracion.html">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="frmLibros.php">Libros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="frmAutor.php">Autores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="frmEditorial.php">Editoriales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="frmCarrera.php">Carreras</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
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
<script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>