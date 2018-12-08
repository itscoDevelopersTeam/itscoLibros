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
<br><br>
<center>
<form action="../form-handlers/add-autor-handler.php" method="GET">
	<table border="2">
		<tr>
			<td> Ingresa nombre: </td>
			<td> <input type="text" name="txtNombreAutor"></td>
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
<footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Cristhian Enrique ,Samuel Gomez</p>
      </div>
      <!-- /.container -->
    </footer>
<script src="../../css/jquery/jquery.min.js"></script>
    <script src="../../css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>