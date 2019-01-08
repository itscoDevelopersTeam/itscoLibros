<?php 
include("../models/Carrera.php");
include("../controllers/CrudCarrera.php");

$crudCarrera = new CrudCarrera();
$carrera = $crudCarrera->select($_GET['id_carrera']);
echo json_encode($carrera);

 ?>