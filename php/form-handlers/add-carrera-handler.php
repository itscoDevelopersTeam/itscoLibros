<?php 
include("../models/Carrera.php");
include("../controllers/CrudCarrera.php");

$carrera = new Carrera();
$carrera->set_id_carrera($_GET['txtIdCarrera']);
$carrera->set_nombre($_GET['txtNombreCarrera']);

$crudCarrera = new CrudCarrera();
$crudCarrera->insert($carrera);

 ?>