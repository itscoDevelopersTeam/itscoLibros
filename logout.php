<?php 
session_start();
if($_SESSION) {
	session_destroy();
	header("Location: index.php");
}
else
	header("Location: index.php?mensaje=usted no se ha logueado");

 ?>