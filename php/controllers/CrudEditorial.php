<?php 
include("../connection.php");

class Editorial {

	function insert($editorial) {
		$strInsert = "INSERT INTO EDITORIALES VALUES(:nombre)";
		$insert = $connection->prepare($strInsert);
		$insert->bindValue('nombre', $editorial->get_nombre());
		$insert->execute();
	}

	function delete($idEditorial) {
		$strDelete = "DELETE FROM EDITORIALES WHERE ID_EDITORIAL = :id_editorial";
		$delete = $connection->prepare($strDelete);
		$delete->bindValue('id_editorial', $idEditorial);
		$delete->execute();
	}

	function select($idEditorial) {
		$strSelect = "SELECT * FROM EDITORIALES WHERE ID_EDITORIAL = :id_editorial";
		$select = $connection->prepare($strSelect);
		$select->bindValue("id_editorial", $idEditorial);
		$select->execute();

		$result = $select->fetch();
		$editorial = new Editorial;
		$editorial->set_id_editorial($result['ID_EDITORIAL']);
		$editorial->set_nombre($result['NOMBRE']);
		return $editorial;
	}

	function select_all(){
		$strSelectAll = "SELECT * FROM EDITORIALES";
		$selectAll= $connection->query($strSelectAll);
		$listaEditoriales = [];

		foreach($selectAll->fetchAll() as $result){
			$editorial= new Editorial;
			$editorial->set_id_editorial($result['ID_EDITORIAL']);
			$editorial->set_nombre($result['NOMBRE']);
			$listaEditoriales[]=$editorial;
		}
		return $listaEditoriales;
	}
}

 ?>