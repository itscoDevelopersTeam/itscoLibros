<?php 
include("../models/Carrera.php");
include("../controllers/CrudCarrera.php");
$clave = $_GET['txt-clave-carrera'];
$nombre = $_GET['txt-nombre-carrera'];
    //VALIDACION DE LOS DATOS DE LA CARRERA
	if(preg_match("/^[A-Za-z0-9\s]+$/",$clave) && preg_match("/^[A-Za-z0-9\s]+$/",$nombre)){
	$carrera = new Carrera();
	$carrera->set_id_carrera($clave);
	$carrera->set_nombre($nombre);
	$crudCarrera = new CrudCarrera();
	$crudCarrera->insert($carrera);
	}
	else{
	echo "error";
	}

 ?>