<?php 

require_once('../../modelo/InspeccionModel.php');

class InspeccionController {
	private $model;

    // Metodo constructo de la clase
	public function __construct() {
		$this->model = new InspeccionModel();
	}

   
	public function create( $inspeccion_data = array() ) {

		
		return $this->model->create($inspeccion_data);
	}

	public function read( $ins_id = '' ) {
		return $this->model->read($ins_id);
	}

	public function update($inspeccion_data = array() ) {
		return $this->model->update($inspeccion_data);
	}

	public function delete( $ins_id = '' ) {
		return $this->model->delete($ins_id);
	}

	public function __destruct() {
		//unset($this);
	}
}