<?php
include("../models/Libro.php");
include("../controllers/CrudLibro.php");

$libro = new Libro();
$libro->set_id_libro($_GET['txt-codigo-libro']);
$libro->set_titulo($_GET['txt-titulo']);
$libro->set_numero_paginas($_GET['txt-numero-paginas']);
$libro->set_stock($_GET['txt-stock']);
$libro->set_id_autor($_GET['txt-autor']);
$libro->set_id_editorial($_GET['txt-editorial']);
$crudLibro = new CrudLibro();
$crudLibro->insert($libro);
?>