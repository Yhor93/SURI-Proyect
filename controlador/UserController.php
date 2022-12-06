<?php 

require_once('../../modelo/UserModel.php');

class UserController {
	private $model;

    // Metodo constructo de la clase
	public function __construct() {
		$this->model = new UserModel();
	}

   
	public function create( $user_data = array() ) {

		
		return $this->model->create($user_data);
	}

	public function read( $usu_id = '' ) {
		return $this->model->read($usu_id);
	}

	public function update( $user_data = array() ) {
		return $this->model->update($user_data);
	}

	public function delete( $usu_id = '' ) {
		 
		return $this->model->delete($usu_id);
	}

	public function __destruct() {
		//unset($this);
	}
}