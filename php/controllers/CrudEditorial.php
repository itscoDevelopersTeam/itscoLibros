<?php 
include("connection.php");

class CrudEditorial {
	private $myConnection;

	function __construct() { $this->myConnection = DataBase::conectar(); }

	function insert($editorial) {
		$strInsert = "INSERT INTO EDITORIALES (NOMBRE) VALUES(:nombre)";
		$insert = $this->myConnection->prepare($strInsert);
		$insert->bindValue('nombre', $editorial->get_nombre());
		$insert->execute();
	}
	function update($idEdit,$name){
		$strUpdate = "UPDATE EDITORIALES SET NOMBRE = :name WHERE ID_EDITORIAL = :idEdit";
		$update = $this->myConnection->prepare($strUpdate);
		$update->bindValue('idEdit',$idEdit);
	    $update->bindValue('name',$name);
		$update->execute();
	}
	function delete($idEditorial) {
		$strDelete = "DELETE FROM EDITORIALES WHERE ID_EDITORIAL = :id_editorial";
		$delete = $this->myConnection->prepare($strDelete);
		$delete->bindValue('id_editorial', $idEditorial);
		$delete->execute();
	}

	function select($idEditorial) {
		$strSelect = "SELECT * FROM EDITORIALES WHERE ID_EDITORIAL = :id_editorial";
		$select = $this->myConnection->prepare($strSelect);
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
		$selectAll= $this->myConnection->query($strSelectAll);
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