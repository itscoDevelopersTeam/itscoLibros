<?php 
require("../models/Usuario.php");
require("../controllers/CrudUsuario.php");

$userobj = new Usuario();
$userobj->set_username($_REQUEST['txtUser']);
$userobj->set_password($_REQUEST['txtPassword']);

$crudUsuario = new CrudUsuario();

if($resultSet = $crudUsuario->exists($userobj)) {
	session_start();	//Activa la sesión
	$_SESSION['name'] = $resultSet['USERNAME'];
	header("Location: http://localhost/itscoLibros/php/usuarioAdmin.php");
}
else{
	header("Location: http://localhost/itscoLibros/index.php?mensaje=Sus datos no son válidos");
}
 ?>