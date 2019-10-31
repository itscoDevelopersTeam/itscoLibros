<?php
include("connection.php");
class CrudLibro{
	private $myConnection;
	function __construct() { $this->myConnection = DataBase::conectar(); }
	function insert($libro) {
		$strInsert = "INSERT INTO LIBROS (clave,titulo,tipo,anio,programa,editorial,autor,ubicacion,estado) VALUES(:id_libro, :id_titulo, :tipo, :anio, :programa, :id_editorial, :id_autor,  :ubicacion, :estado)";
		$insert = $this->myConnection->prepare($strInsert);
		$insert->bindValue('id_libro', $libro->get_id_libro());
		$insert->bindValue('id_titulo', $libro->get_titulo());
		$insert->bindValue('tipo', $libro->get_tipo());
		$insert->bindValue('anio', $libro->get_anio());
		$insert->bindValue('programa', $libro->get_programa());
		$insert->bindValue('id_autor', $libro->get_id_autor());
		$insert->bindValue('id_editorial', $libro->get_id_editorial());
		$insert->bindValue('ubicacion', $libro->get_ubicacion());
		$insert->bindValue('estado', $libro->get_estado());
		$insert->execute();
	}
	function update($idbook,$tit,$pag,$cant,$aut,$edit){
		$strUpdate = "UPDATE libros SET titulo = :tit, autor=:aut, editorial=:edit, numero_paginas=:pag stock=:cant WHERE clave = :idbook";
		$update = $this->myConnection->prepare($strUpdate);
		$update->bindValue('idbook',$idbook);
	    $update->bindValue('tit',$tit);
	    $update->bindValue('pag',$pag);
	    $update->bindValue('cant',$cant);
	    $update->bindValue('aut',$aut);
	    $update->bindValue('edit',$edit);
		$update->execute();
	}
	function select_all(){
		$strSelectAll = "SELECT * FROM LIBROS";
		$selectAll= $this->myConnection->query($strSelectAll);
		$listaLibros = [];
		foreach($selectAll->fetchAll() as $result){
			$libro= new Libro;
			$libro->set_id_libro($result['clave']);
			$libro->set_titulo($result['titulo']);
			$libro->set_tipo($result['tipo']);
			$libro->set_anio($result['anio']);
			$libro->set_programa($result['programa']);
			$libro->set_estado($result['estado']);
			$libro->set_ubicacion($result['ubicacion']);
			$libro->set_id_autor($result['autor']);
			$libro->set_id_editorial($result['editorial']);
			$libro->set_stock($result['stock']);
			$libro->set_numero_paginas($result['numero_paginas']);
			$listaLibros[]=$libro;
		}
		return $listaLibros;
	}

	function delete($idLibro) {
		$strDelete = "DELETE FROM libros WHERE clave = :id_libro";
		$delete = $this->myConnection->prepare($strDelete);
		$delete->bindValue('id_libro', $idLibro);
		$delete->execute();
	}
	
	function select($idLibro) {
		$strSelect = "SELECT * FROM libros WHERE clave = :id_libro";
		$select = $this->myConnection->prepare($strSelect);
		$select->bindValue("id_libro", $idLibro);
		$select->execute();
		$result = $select->fetch();
		$libro = new Libro;
		$libro->set_id_libro($result['clave']);
		$libro->set_titulo($result['titulo']);
		$libro->set_numero_paginas($result['numero_paginas']);
		$libro->set_stock($result['stock']);
		$libro->set_id_autor($result['autor']);
		$libro->set_id_editorial($result['editorial']);
		return $libro;
	}
}