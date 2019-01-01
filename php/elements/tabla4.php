<?php
include("../models/Libro.php");
include("../controllers/CrudLibro.php");

$crudLibro = new CrudLibro();
$libros = $crudLibro->select_all();
 
