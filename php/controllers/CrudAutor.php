<?php 
include("../connection.php");

class CrudAutor {

	function insert($autor) {
		$strInsert = "INSERT INTO AUTORES VALUES(:nombre)";
		$insert = $connection->prepare($strInsert);
		$insert->bindValue('nombre', $autor->get_nombre());
		$insert->execute();
	}

	function delete($idAutor) {
		$strDelete = "DELETE FROM AUTORES WHERE ID_AUTOR = :id_autor";
		$delete = $connection->prepare($strDelete);
		$delete->bindValue('id_autor', $idAutor);
		$delete->execute();
	}

	function select($idAutor) {
		$strSelect = "SELECT * FROM AUTORES WHERE ID_AUTOR = :id_autor";
		$select = $connection->prepare($strSelect);
		$select->bindValue("id_autor", $idAutor);
		$select->execute();

		$result = $select->fetch();
		$autor = new Autor;
		$autor->set_id_autor($result['ID_AUTOR']);
		$autor->set_nombre($result['NOMBRE']);
		return $autor;
	}

	function select_all(){
		$strSelectAll = "SELECT * FROM AUTORES";
		$selectAll= $connection->query($strSelectAll);
		$listaAutores = [];

		foreach($selectAll->fetchAll() as $result){
			$autor= new Autor;
			$autor->set_id_autor($result['ID_AUTOR']);
			$autor->set_nombre($result['NOMBRE']);
			$listaAutores[]=$autor;
		}
		return $listaAutores;
	}
}

 ?>