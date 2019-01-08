<?php
include("../models/Editorial.php");
include("../controllers/CrudEditorial.php");

$crudEditorial = new CrudEditorial();
$editorial = $crudEditorial->select($_GET['id_editorial']);
echo json_encode($editorial);

?>