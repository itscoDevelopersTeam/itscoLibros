<?php 
session_start();
if($_SESSION) {
	session_destroy();
	header("Location: index.php?mensaje=gracias por participar");
}
else
	header("Location: index.php?mensaje=usted no se ha logueado");

 ?>