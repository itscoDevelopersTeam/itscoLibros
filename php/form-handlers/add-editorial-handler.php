<?php 
include("../models/Editorial.php");
include("../controllers/CrudEditorial.php");
$nombre = $_GET['txtNombreEditorial'];
if(preg_match("/^[A-Za-z0-9\s]+$/",$nombre)){
$editorial = new Editorial();
$editorial->set_nombre($nombre);
$crudEditorial = new CrudEditorial();
$crudEditorial->insert($editorial);
}
else
{
	echo "error";
}

 ?>