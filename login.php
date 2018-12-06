<?php 
$usuario = $_REQUEST['txtUser'];
$password = $_REQUEST['txtPassword'];
include("php/conexionGeneral.php");
$query = "SELECT * FROM USUARIOS WHERE USERNAME = '$usuario' AND PASSWORD = '$password'";
echo($usuario);
$registro = mysqli_query($conexion, $query);
if($reg = mysqli_fetch_array($registro)) {
	session_start();	//Activa la sesión
	$_SESSION['name'] = $reg['USERNAME'];
	$_SESSION['email'] = $reg['ID_USUARIO'];
	header("Location: php/paneles/usuarioNormal.php");
}
else{
	header("Location: index.php?mensaje=Sus datos no son válidos");
}

 ?>