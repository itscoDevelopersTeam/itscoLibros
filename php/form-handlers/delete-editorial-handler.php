<?php 
include("../models/Editorial.php");
include("../controllers/CrudEditorial.php");

$crudAutor = new CrudEditorial();
$crudAutor->delete($_GET['id_editorial']);

 ?>