<?php
include("../models/Libro.php");
include("../controllers/CrudLibro.php");

$crudLibro = new CrudLibro();
$libro = $crudLibro->select($_GET['id_libro']);
echo json_encode($libro);

?>