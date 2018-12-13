<!DOCTYPE html>

<html>
	<head>
		<title>Crud Libros</title>
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
<form method="GET" action="../form-handlers/add-libro-handler.php">
  <table>
      <td> Ingresa codigo del libro: </td>
      <td> <input type="text" name="txtCodigo"></td>
    </tr>
    <tr>
      <td> <input type="Submit" value="Agregar"></td>
    </tr>
  </table>
</form>
</center>
<script src="../../css/jquery/jquery.min.js"></script>
    <script src="../../css/bootstrap/js/bootstrap.bundle.min.js"></script>
	</body>
</html>