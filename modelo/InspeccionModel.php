<?php 
require_once('ModelConexion.php');

//Clase modelo usuario aqui se defienen los atributos de la clase que corresponden a los campos de la base de datos

class InspeccionModel extends ModelConexion {
	public $ins_id;
	public $ins_idubicacion;
	public $ins_cargo;
	public $ins_fechahora;
	public $ins_anexos;
	public $ins_observaciones;
	

    // metodo para insersion de reistros
	public function create( $inspeccion_data = array() ) {
			
		foreach ($inspeccion_data as $key => $value) {
			$$key = $value;
		}

		
		$this->query = "INSERT INTO inspecciones (ins_idubicacion,ins_cargo,ins_fechahora,ins_anexos,ins_observaciones) VALUES ('$ins_idubicacion','$ins_cargo','$ins_fechahora','$ins_anexos','$ins_observaciones')"; 
			$this->set_query();
	}

   //metodo para consultar registro

	public function read( $ins_id = '' ) {
		$this->query = ($ins_id != '')
			?"SELECT * FROM inspecciones WHERE ins_id = $ins_id"
			:"SELECT * FROM inspecciones";
		
		$this->get_query();
		

		$num_rows = count($this->rows);
		

		$data = array();

		
		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
			
		}

		return $data;
	}


	//metodo para actualizar datos

	public function update($inspeccion_data = array() ) {
		foreach ($inspeccion_data as $key => $value) {
			$$key = $value;
		}

		$this->query = "UPDATE inspecciones SET ins_anexos = '$ins_anexos', ins_idubicacion = '$ins_idubicacion', ins_observaciones = '$ins_observaciones'		 
			WHERE ins_id = $ins_id"; 

		$this->set_query();
	}

	
	// Metodo de borrrado de datos

	public function delete( $ins_id = '' ) {
		$this->query = "DELETE FROM inspecciones WHERE ins_id = $ins_id";
		$this->set_query();
	}

	// Destruye la conexion a la DB y libera la memoria

	public function __destruct() {
		//unset($this);
	}
}