<?php 
include("connection.php");

class CrudAutor {
	private $myConnection;

	function __construct() { $this->myConnection = DataBase::conectar(); }

	function insert($autor) {
		$strInsert = "INSERT INTO AUTORES (NOMBRE) VALUES(:nombre)";
		$insert = $this->myConnection->prepare($strInsert);
		$insert->bindValue('nombre', $autor->get_nombre());
		$insert->execute();
	}

	function delete($idAutor) {
		$strDelete = "DELETE FROM AUTORES WHERE ID_AUTOR = :id_autor";
		$delete = $this->myConnection->prepare($strDelete);
		$delete->bindValue('id_autor', $idAutor);
		$delete->execute();
	}

	function select($idAutor) {
		$strSelect = "SELECT * FROM AUTORES WHERE ID_AUTOR = :id_autor";
		$select = $this->myConnection->prepare($strSelect);
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
		$selectAll= $this->myConnection->query($strSelectAll);
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