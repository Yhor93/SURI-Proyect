<?php 
require_once('ModelConexion.php');

//Clase modelo usuario aqui se defienen los atributos de la clase que corresponden a los campos de la base de datos

class CargoModel extends ModelConexion {
	public $car_id;
	public $car_codigo;
	public $car_descripcion;
	

    // metodo para insersion de reistros
	public function create( $cargo_data = array() ) {
			
		foreach ($cargo_data as $key => $value) {
			$$key = $value;
		}

		
		$this->query = "INSERT INTO cargos (car_codigo,car_descripcion) VALUES ('$car_codigo','$car_descripcion')"; 
	
			$this->set_query();
	}

   //metodo para consultar registro

	public function read( $car_id = '' ) {
		$this->query = ($car_id != '')
			?"SELECT * FROM cargos WHERE car_id = $car_id"
			:"SELECT * FROM cargos";
		
		$this->get_query();
		

		$num_rows = count($this->rows);
		

		$data = array();

		
		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
			
		}

		return $data;
	}


	//metodo para actualizar datos

	public function update( $cargo_data = array() ) {
		
		foreach ($cargo_data as $key => $value) {
			$$key = $value;
		}

		$this->query = "UPDATE cargos SET car_codigo = '$car_codigo', car_descripcion = '$car_descripcion'
			
		 WHERE car_id = $car_id";
		$this->set_query();
	}

	
	// Metodo de borrrado de datos

	public function delete( $car_id = '' ) {
		$this->query = "DELETE FROM cargos WHERE car_id = $car_id";
		$this->set_query();
	}

	// Destruye la conexion a la DB y libera la memoria

	public function __destruct() {
		//unset($this);
	}
}