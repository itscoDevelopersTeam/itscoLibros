<?php 
include("../models/Autor.php");
include("../controllers/CrudAutor.php");

$crudAutor = new CrudAutor();
$crudAutor->delete($_POST['id_autor']);

 ?>