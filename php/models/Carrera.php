<?php 
class Carrera {
	public $id_carrera;
	public $nombre;

	function set_id_carrera($idCarrera) { $this->id_carrera = $idCarrera; }
	function set_nombre($nombre) { $this->nombre = $nombre; }

	function get_id_carrera() { return $this->id_carrera; }
	function get_nombre() { return $this->nombre; }
}

?>