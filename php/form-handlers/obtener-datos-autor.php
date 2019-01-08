<?php 
include("../models/Autor.php");
include("../controllers/CrudAutor.php");

$crudAutor = new CrudAutor();
$autor = $crudAutor->select($_GET['id_autor']);
echo json_encode($autor);

 ?>