<?php
include("../models/Editorial.php");
include("../controllers/CrudEditorial.php");
$idEdi = $_POST['txt-actualiza-id'];
$nomEdi = $_POST['txt-actualiza-nombre'];
if(preg_match("/^[a-zA-Z\s]+$/", $nomEdi)){
$crudEditorial = new CrudEditorial();
$crudEditorial->update($idEdi,$nomEdi);
}
else{
	echo "error";
}
?>