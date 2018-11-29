<?php 
include("../connection.php");

class CrudCarrera {

	function insert($carrera) {
		$strInsert = "INSERT INTO CARRERAS VALUES(:nombre)";
		$insert = $connection->prepare($strInsert);
		$insert->bindValue('nombre', $carrera->get_nombre());
		$insert->execute();
	}

	function delete($idCarrera) {
		$strDelete = "DELETE FROM CARRERAS WHERE ID_CARRERA = :id_carrera";
		$delete = $connection->prepare($strDelete);
		$delete->bindValue('id_carrera', $idCarrera);
		$delete->execute();
	}

	function select($idCarrera) {
		$strSelect = "SELECT * FROM CARRERAS WHERE ID_CARRERA = :id_carrera";
		$select = $connection->prepare($strSelect);
		$select->bindValue("id_carrera", $idCarrera);
		$select->execute();

		$result = $select->fetch();
		$carrera = new Carrera;
		$carrera->set_id_carrera($result['ID_CARRERA']);
		$carrera->set_nombre($result['NOMBRE']);
		return $carrera;
	}

	function select_all(){
		$strSelectAll = "SELECT * FROM CARRERAS";
		$selectAll= $connection->query($strSelectAll);
		$listaCarreras = [];

		foreach($selectAll->fetchAll() as $result){
			$carrera= new Carrera;
			$carrera->set_id_carrera($result['ID_CARRERA']);
			$carrera->set_nombre($result['NOMBRE']);
			$listaCarreras[]=$carrera;
		}
		return $listaCarreras;
	}
}
 ?>