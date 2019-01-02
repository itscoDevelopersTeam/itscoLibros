<?php
include("connection.php");
class CrudLibro{
	private $myConnection;
	function __construct() { $this->myConnection = DataBase::conectar(); }
	function insert($libro) {
		$strInsert = "INSERT INTO LIBROS (clave,titulo,numero_paginas,stock,estado,autor,editorial) VALUES(:id_libro, :id_titulo, :numero_paginas, :stock, :estado, :id_autor, :id_editorial)";
		$insert = $this->myConnection->prepare($strInsert);
		$insert->bindValue('id_libro', $libro->get_id_libro());
		$insert->bindValue('id_titulo', $libro->get_titulo());
		$insert->bindValue('numero_paginas', $libro->get_numero_paginas());
		$insert->bindValue('stock', $libro->get_stock());
		$insert->bindValue('estado', $libro->get_estado());
		$insert->bindValue('id_autor', $libro->get_id_autor());
		$insert->bindValue('id_editorial', $libro->get_id_editorial());
		$insert->execute();
		
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
			$libro->set_estado($result['estado']);
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
}