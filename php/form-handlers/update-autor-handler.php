<?php 
include("../models/Autor.php");
include("../controllers/CrudAutor.php");
$idAu = $_GET['txt-actualiza-id'];
$nomAu = $_GET['txt-actualiza-nombre'];
$crudAutor = new CrudAutor();
$crudAutor->update($idAu,$nomAu);
 ?>