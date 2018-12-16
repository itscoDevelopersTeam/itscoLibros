<?php 
include("../models/Carrera.php");
include("../controllers/CrudCarrera.php");

$carrera = new Carrera();
$carrera->set_id_carrera($_GET['txt-clave-carrera']);
$carrera->set_nombre($_GET['txt-nombre-carrera']);

$crudCarrera = new CrudCarrera();
$crudCarrera->insert($carrera);

 ?>