<?php 
class Usuario {
	private $id_usuario;
	private $username;
	private $password;

	function set_id_usuario($idUsuario) { $this->id_usuario = $idUsuario; }
	function set_username($username) { $this->username = $username; }
	function set_password($password) { $this->password = $password; }

	function get_id_usuario() { return $this->id_usuario; }
	function get_username() { return $this->username; }
	function get_password() { return $this->password; }
}

 ?>