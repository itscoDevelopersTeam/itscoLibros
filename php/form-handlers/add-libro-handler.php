<?php
include("../models/Libro.php");
include("../controllers/CrudLibro.php");
$codigo = $_GET['txt-codigo-libro'];
$titulo = $_GET['txt-titulo'];
if(preg_match("/^[A-Za-z0-9\s]+$/", $codigo) && preg_match("/^[A-Za-z0-9\s]+$/", $titulo)){
$libro = new Libro();
$libro->set_id_libro($codigo);
$libro->set_titulo($titulo);
$libro->set_tipo($_GET['txt-tipo']);
$libro->set_anio($_GET['txt-anio']);
$libro->set_programa($_GET['txt-programa']);
$libro->set_id_autor($_GET['autoreslista']);
$libro->set_id_editorial($_GET['editorialeslista']);
$libro->set_ubicacion($_GET['txt-ubicacion']);
$libro->set_estado($_GET['txt-estado']);
$crudLibro = new CrudLibro();
$crudLibro->insert($libro);
}
else
{
	echo "error";
}
?>