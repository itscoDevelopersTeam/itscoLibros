<?php 
class Editorial {
	private $id_editorial;
	private $nombre;

	function set_id_editorial($idEditorial) { $this->id_editorial = $idEditorial; }
	function set_nombre($nombre) { $this->nombre = $nombre; }

	function get_id_editorial() { return $this->id_editorial; }
	function get_nombre() { return $this->nombre; }
}

 ?>