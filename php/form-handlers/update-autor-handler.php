<?php 
include("../models/Autor.php");
include("../controllers/CrudAutor.php");
$autor = new Autor();
$autor->set_id_autor($_GET['txt-actualiza-id']);
$autor->set_nombre($_GET['txt-actualiza-nombre']);
//$crudAutor->update($_GET['txt-actualiza-id'],$_GET['txt-actualiza-nombre']);
$crudAutor = new CrudAutor();
$crudAutor->update($autor);
 ?>