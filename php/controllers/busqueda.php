<?php

include("connection.php");
class busqueda{
	private $myConnection;
	function __construct() { $this->myConnection = DataBase::conectar(); }

	function select_all(){
		$strSelectAll = "SELECT clave,titulo,tipo,anio,programa,autor,editorial, direccion_url, ubicacion, estado FROM libros";
		$selectAll= $this->myConnection->query($strSelectAll);
		return $this->get_object_list($selectAll);
	}

	function select_mca() {
		$str_select_mca = "SELECT clave,titulo,tipo,anio,programa,autor,editorial, direccion_url, ubicacion, estado FROM libros WHERE programa = 'MCA'";
		$select_mca = $this->myConnection->query($str_select_mca);
		return $this->get_object_list($select_mca);
	}

	function select_mrysi() {
		$str_select_mrysi = "SELECT clave,titulo,tipo,anio,programa,autor,editorial, direccion_url, ubicacion, estado FROM libros WHERE programa = 'MRYSI'";
		$select_mrysi = $this->myConnection->query($str_select_mrysi);
		return $this->get_object_list($select_mrysi);
	}

	function get_object_list($query) {
		$lista = [];
		foreach($query->fetchAll() as $result){
			$libro= new Libro;
			$libro->set_id_libro($result['clave']);
			$libro->set_titulo($result['titulo']);
			$libro->set_tipo($result['tipo']);
			$libro->set_anio($result['anio']);
			$libro->set_programa($result['programa']);
			$libro->set_id_autor($result['autor']);
			$libro->set_id_editorial($result['editorial']);
			$libro->set_ubicacion($result['ubicacion']);
			$libro->set_url($result['direccion_url']);
			$libro->set_estado($result['estado']);
			$lista[] = $libro;
		}

		return $lista;
	}
}
?>