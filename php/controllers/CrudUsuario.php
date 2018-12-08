<?php 
include("connection.php");

class CrudUsuario {
	private $myConnection;

	function __contruct() { $this->myConnection = DataBase::conectar(); }

	function exists($user) {
		$query = "SELECT USERNAME, PASSWORD FROM USUARIOS WHERE USERNAME = :username AND PASSWORD = :password";
		$exists = $this->myConnection->prepare($query);
		$exists->bindValue("username", $user->get_username());
		$exists->bindValue("password", $user->get_password());
		$exists->execute();
		return $exists->fetch();
	}
}

 ?>