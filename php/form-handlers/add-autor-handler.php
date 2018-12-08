<?php 
include("../models/Autor.php");
include("../controllers/CrudAutor.php");

$autor = new Autor();
$autor->set_nombre($_GET['txtNombreAutor']);
$crudAutor = new CrudAutor();
$crudAutor->insert($autor);
header("Location: http://localhost:8080/itscoLibros/php/formularios/frmAutor.php?mensaje=añadido");
?>