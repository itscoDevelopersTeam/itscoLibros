<?php
include("../models/Libro.php");
include("../controllers/CrudLibro.php");
$codigo = $_GET['txt-codigo-libro'];
$titulo = $_GET['txt-titulo'];
if(preg_match("/^[A-Za-z0-9\s]+$/", $codigo) && preg_match("/^[A-Za-z0-9\s]+$/", $titulo)){
$libro = new Libro();
$libro->set_id_libro($codigo);
$libro->set_titulo($titulo);
$libro->set_numero_paginas($_GET['txt-numero-paginas']);
$libro->set_stock($_GET['txt-stock']);
$libro->set_id_autor($_GET['autoreslista']);
$libro->set_id_editorial($_GET['editorialeslista']);
$crudLibro = new CrudLibro();
$crudLibro->insert($libro);
}
else
{
	echo "error";
}
?>