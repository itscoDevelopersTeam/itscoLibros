<?php 
require("../controllers/connection.php");
$usuario = $_REQUEST['txtUser'];
$password = $_REQUEST['txtPassword'];
$connection = DataBase::conectar();
$query = "SELECT * FROM USUARIOS WHERE USERNAME = :nombre AND PASSWORD = :password";

$selectStatement = $connection->prepare($query);
$selectStatement->bindValue("nombre", $usuario);
$selectStatement->bindValue("password", $password);

if($selectStatement->execute()) {
	$resultSet = $selectStatement->fetch();

	session_start();	//Activa la sesión
	$_SESSION['name'] = $resultSet['USERNAME'];
	$_SESSION['email'] = $resultSet['ID_USUARIO'];
	header("Location: http://localhost/itscoLibros/php/paneles/usuarioNormal.php");
}
else{
	header("Location: index.php?mensaje=Sus datos no son válidos");
}

 ?>