<?php
include("../models/Editorial.php");
include("../controllers/CrudEditorial.php");
$idEdi = $_POST['txt-actualiza-id'];
$nomEdi = $_POST['txt-actualiza-nombre'];
$crudEditorial = new CrudEditorial();
$crudEditorial->update($idEdi,$nomEdi);

?>