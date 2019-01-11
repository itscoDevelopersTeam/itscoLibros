<?php
include("../models/Carrera.php");
include("../controllers/CrudCarrera.php");
$idCar = $_GET['txt-actualiza-id'];
$nomCar = $_GET['txt-actualiza-nombre'];
if(preg_match("/^[A-Za-z0-9\s]+$/", $nomCar)){
$crudCarrera = new CrudCarrera();
$crudCarrera->update($idCar,$nomCar);}
else{
	echo "error";
}
?>