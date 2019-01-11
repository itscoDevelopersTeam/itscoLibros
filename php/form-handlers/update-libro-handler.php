<?php 
include("../models/Libro.php");
include("../controllers/CrudLibro.php");
$idbook= $_GET['txt-actualiza-id'];
$title= $_GET['txt-actualiza-titulo'];
$pages= $_GET['txt-actualiza-paginas'];
$cantidad= $_GET['txt-actualiza-stock'];
$autorl= $_GET['txt-actualiza-autor'];
$edilibro= $_GET['txt-actualiza-editorial'];
$crudLibro = new CrudLibro();
$crudLibro->update($idbook,$title,$pages,$cantidad,$autorl,$edilibro);
?>
