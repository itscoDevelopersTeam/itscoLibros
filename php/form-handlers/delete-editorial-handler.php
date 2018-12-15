<?php 
include("../models/Editorial.php");
include("../controllers/CrudEditorial.php");

$crudAutor = new CrudEditorial();
$crudAutor->delete($_POST['id_editorial']);

 ?>