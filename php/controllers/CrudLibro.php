<?php
include("connection.php");
class CrudLibro{
	private $myConnection;
	function __construct() { $this->myConnection = DataBase::conectar(); }
	function insert($libro) {
		$strInsert = "INSERT INTO LIBROS (clave,titulo,numero_paginas,stock,autor,editorial) VALUES(:id_libro, :id_titulo, :numero_paginas, :stock, :id_autor, :id_editorial)";
		$insert = $this->myConnection->prepare($strInsert);
		$insert->bindValue('id_libro', $libro->get_id_libro());
		$insert->bindValue('id_titulo', $libro->get_titulo());
		$insert->bindValue('numero_paginas', $libro->get_numero_paginas());
		$insert->bindValue('stock', $libro->get_stock());
		$insert->bindValue('id_autor', $libro->get_id_autor());
		$insert->bindValue('id_editorial', $libro->get_id_editorial());
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
			$libro->set_numero_paginas($result['numero_paginas']);
			$libro->set_stock($result['stock']);
			$libro->set_id_autor($result['autor']);
			$libro->set_id_editorial($result['editorial']);
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