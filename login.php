<!DOCTYPE html>

<html>
	<head>
		<title>LANIA libros</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/css/all.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">	
	</head>

	<body>
		<form method="post" action="php/form-handlers/login.php">
			<div class="form-row login-header">
				<i class="fas fa-graduation-cap fa-3x"></i>
				<h4> lania libros </h4>
			</div>

			<!-- Campos de datos -->
			<div class="form-row">
				<input type="text" name="txtUser" placeholder="Nombre usuario">
			</div>

			<div class="form-row">
				<input type="password" name="txtPassword" placeholder="Contraseña">
			</div>

			<div class="form-row">
				<input type="submit" value="ingresar">
			</div>
		</form>
	</body>
</html>