<?php 
include("../models/Autor.php");
include("../controllers/CrudAutor.php");

$autor = new Autor();
$autor->set_nombre($_POST['txt-nuevo-nombre']);
$crudAutor = new CrudAutor();
$crudAutor->insert($autor);

?>