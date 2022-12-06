<?php
require_once('./modelo/UserModel.php');
class SessionController {

	private $session;

	public function __construct() {
		$this-> session = new UserModel();
	}

	public function login($flogin, $pass) {
		return $this->session->validate_user($flogin, $pass);
		
	}

	public function logout() {
		session_start();
		session_destroy();
		header('Location: ./');
	}

	//public function __destruct() {
	//	unset($this);
	//}
}