<?php 

require_once('../../modelo/CargoModel.php');

class CargoController {
	private $model;

    // Metodo constructo de la clase
	public function __construct() {
		$this->model = new CargoModel();
	}

   
	public function create( $cargo_data = array() ) {

		
		return $this->model->create($cargo_data);
	}

	public function read( $car_id = '' ) {
		return $this->model->read($car_id);
	}

	public function update( $cargo_data = array() ) {
		return $this->model->update($cargo_data);
	}

	public function delete( $car_id = '' ) {
		return $this->model->delete($car_id);
	}

	public function __destruct() {
		//unset($this);
	}
}