<?php 
include("../models/Editorial.php");
include("../controllers/CrudEditorial.php");

$editorial = new Editorial();
$editorial->set_nombre($_GET['txtNombreEditorial']);

$crudEditorial = new CrudEditorial();
$crudEditorial->insert($editorial);

 ?>