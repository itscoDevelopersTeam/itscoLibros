<?php 
class Libro {
	public $id_libro;
	public $titulo;
	public $tipo;
	public $anio;
	public $programa;
	public $ubicacion;
	public $estado;
	public $id_autor;
	public $id_editorial;
	
	public $stock;
	public $numero_paginas;
	
	function set_id_libro($idLibro) { $this->id_libro = $idLibro; }
	function set_titulo($titulo) { $this->titulo = $titulo; }
	function set_tipo($tipo) { $this->tipo = $tipo; }
	function set_anio($anio) { $this->anio = $anio; }
	function set_programa($programa) { $this->programa = $programa; }
	function set_ubicacion($ubicacion) { $this->ubicacion = $ubicacion; }
	function set_estado($estado) { $this->estado = $estado; }
	function set_id_autor($idAutor) { $this->id_autor = $idAutor; }
	function set_id_editorial($idEditorial) { $this->id_editorial = $idEditorial; }
	
	// Campos retirados
	function set_stock($stock) { $this->stock = $stock; }
	function set_numero_paginas($numeroPaginas) { $this->numero_paginas = $numeroPaginas; }

	function get_id_libro() { return $this->id_libro; }
	function get_titulo() { return $this->titulo; }
	function get_tipo() { return $this->tipo; }
	function get_anio() { return $this->anio; }
	function get_programa() { return $this->programa; }
	function get_ubicacion() { return $this->ubicacion; }
	function get_estado() { return $this->estado; }
	function get_id_autor() { return $this->id_autor; }
	function get_id_editorial() { return $this->id_editorial; }
	
	// Campos retirados
	function get_stock() { return $this->stock; }
	function get_numero_paginas() { return $this->numero_paginas; }
}

 ?>