<?php 
class Libro {
	private $id_libro;
	private $titulo;
	private $numero_paginas;
	private $stock;
	private $estado;
	private $id_autor;
	private $id_editorial;

	function set_id_libro($idLibro) { $this->id_libro = $idLibro; }
	function set_titulo($titulo) { $this->titulo = $titulo; }
	function set_numereo_paginas($numeroPaginas) { $this->numero_paginas = $numeroPaginas; }
	function set_stock($stock) { $this->stock = $stock; }
	function set_estado($estado) { $this->estado = $estado; }
	function set_id_autor($idAutor) { $this->id_autor = $idAutor; }
	function set_id_editorial($idEditorial) { $this->id_editorial = $idEditorial; }

	function get_id_libro() { return $this->id_libro; }
	function get_titulo() { return $this->titulo; }
	function get_numero_paginas() { return $this->numero_paginas; }
	function get_stock() { return $this->stock; }
	function get_estado() { return $this->estado; }
	function get_id_autor() { return $this->id_autor; }
	function get_id_editorial() { return $this->id_editorial; }
}

 ?>