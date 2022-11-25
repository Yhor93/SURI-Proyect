<?php 
require_once('UserModel.php');

class UserController {
	private $model;

    // Metodo constructo de la clase
	public function __construct() {
		$this->model = new UserModel();
	}


    
	public function create( $usuario_data = array() ) {
		return $this->model->create($usuario_data);
	}

	public function read( $usario_id = '' ) {
		return $this->model->read($usu_id);
	}

	public function update( $usuario_data = array() ) {
		return $this->model->update($usuario_data);
	}

	public function delete( $usuario_id = '' ) {
		return $this->model->delete($usu_id);
	}

	public function __destruct() {
		unset($this);
	}
}