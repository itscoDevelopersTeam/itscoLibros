<?php 
class Autor {
	public $id_autor;
	public $nombre;

	function set_id_autor($idAutor) { $this->id_autor = $idAutor; }
	function set_nombre($nombre) { $this->nombre = $nombre; }

	function get_id_autor() { return $this->id_autor; }
	function get_nombre() { return $this->nombre; }
}

 ?>