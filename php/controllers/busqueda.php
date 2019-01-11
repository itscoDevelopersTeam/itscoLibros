<?php

include("connection.php");
class busqueda{
	private $myConnection;
	function __construct() { $this->myConnection = DataBase::conectar(); }
function select_all(){
		$strSelectAll = "SELECT DISTINCT clave,titulo,numero_paginas,stock,autores.nombredelAutor,editoriales.nombre FROM libros,autores,editoriales WHERE autor = autores.ID_AUTOR AND editorial = editoriales.ID_EDITORIAL";
		$selectAll= $this->myConnection->query($strSelectAll);
		$listaLibros = [];
		foreach($selectAll->fetchAll() as $result){
			$libro= new Libro;
			$libro->set_id_libro($result['clave']);
			$libro->set_titulo($result['titulo']);
			$libro->set_numero_paginas($result['numero_paginas']);
			$libro->set_stock($result['stock']);
			$libro->set_id_autor($result['nombredelAutor']);
			$libro->set_id_editorial($result['nombre']);
			$listaLibros[]=$libro;
		}
		return $listaLibros;
	}
}
?>