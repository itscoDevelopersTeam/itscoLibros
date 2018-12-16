<?php 
include("../models/Carrera.php");
include("../controllers/CrudCarrera.php");

$crudCarrera = new CrudCarrera();
$crudCarrera->delete($_POST['id_carrera']);

 ?>