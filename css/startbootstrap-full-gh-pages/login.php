<!DOCTYPE html>

<html>
	<head>
		<title>itscoLibros</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/css/all.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">	
	</head>
<body id="loginForm">
<center>
	
	<form id ="formMain">
	<div><h3> Ingresa tus datos </h3></div>
		<div><input type="text" name="txtcorreo" class="cajas" placeholder="ingresa correo"></div>
		<br><br>
		<div><input type="password" name="txtcontraseña" class="cajas" placeholder="ingresa password"></div>
		<br>
		<div><a href= "index.html" id="botonEntrar"> Entrar </a></div>
	</form>
</center>
</body>
	<body>
		<form method="post" action="login.php">
			<div class="form-row login-header">
				<i class="fas fa-graduation-cap fa-3x"></i>
				<h4>itscoLibros</h4>
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