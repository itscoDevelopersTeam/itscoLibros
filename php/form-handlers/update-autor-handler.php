<?php 
include("../models/Autor.php");
include("../controllers/CrudAutor.php");
$idAu = $_GET['txt-actualiza-id'];
$nomAu = $_GET['txt-actualiza-nombre'];
if(preg_match("/^[a-zA-Z\s]+$/", $nomAu))
{
$crudAutor = new CrudAutor();
$crudAutor->update($idAu,$nomAu);
}
else
{
	echo "error";
}
?>
