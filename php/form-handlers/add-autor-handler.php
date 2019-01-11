<?php 
include("../models/Autor.php");
include("../controllers/CrudAutor.php");
$nombre = $_POST['txt-nuevo-nombre'];

	if(preg_match("/^[A-Za-z0-9\s]+$/", $nombre)){
		$autor = new Autor();
		$autor->set_nombre($_POST['txt-nuevo-nombre']);
		$crudAutor = new CrudAutor();
		$crudAutor->insert($autor);
		}
	else
	{
	echo "error";
	}
?>