<?php
include("../models/Editorial.php");
include("../controllers/CrudEditorial.php");
$crudEditorial = new CrudEditorial();
$editorial = $crudEditorial->select($_POST['id_editorial']);
echo json_encode($editorial);
?>