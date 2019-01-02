<?php 
include("../models/Libro.php");
include("../controllers/CrudLibro.php");

$crudLibro = new CrudLibro();
$crudLibro->delete($_POST['id_libro']);
 ?>