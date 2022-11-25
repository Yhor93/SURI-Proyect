<?php 
require_once('ModelConexion.php');

//Clase modelo usuario aqui se defienen los atributos de la clase que corresponden a los campos de la base de datos

class UserModel extends ModelConexion {
	public $usu_id;
	public $usu_tipodocumento;
	public $usu_numerodocumento;
	public $usu_nombres;
	public $usu_login;
	public $usu_password;
	public $usu_correo;
	public $usu_telefono;
	public $usu_direccion;

    // metodo para insersion de reistros
	public function create( $usuario_data = array() ) {
		foreach ($usu_data as $key => $value) {
			//Variables Variables
			
			$$key = $value;
		}

		$this->query = "INSERT INTO usuarios (usu_id, usu_tipodocumento,usu_numerodocumento,usu_nombres,usu_login,usu_password,usu_correo,usu_telefono,usu_direccion) VALUES ($usu_id, '$usu_tipodocumento','$usu_numerodocumento','$usu_nombres','$usu_login','$usu_password','$usu_correo','$usu_telefono','$usu_direccion')";
		$this->set_query();
	}

   //metodo para consultar registro

	public function read( $usu_id = '' ) {
		$this->query = ($usu_id != '')
			?"SELECT * FROM usuarios WHERE usu_id = $usu_id"
			:"SELECT * FROM usuarios";
		
		$this->get_query();
		//var_dump($this->rows);

		$num_rows = count($this->rows);
		//echo $num_rows;

		$data = array();

		
		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
			//$data[$key] =  $value;
		}

		return $data;
	}


	//metodo para actualizar datos

	public function update( $usuario_data = array() ) {
		foreach ($status_data as $key => $value) {
			$$key = $value;
		}

		$this->query = "UPDATE usuarios SET usu_numerodocumento = '$usu_numerodocumento', usu_nombres = '$usu_nombres', usu_login = '$usu_login', usu_correo = '$usu_correo', usu_telefono = '$usu_telefono',
			usu_direccion = '$usu_direccion'			 
			
		 WHERE usu_id = $usu_id";
		$this->set_query();
	}

	
	// Metodo de borrrado de datos

	public function delete( $usu_id = '' ) {
		$this->query = "DELETE FROM usuarios WHERE usu_id = $usu_id";
		$this->set_query();
	}

	// Destruye la conexion a la DB y libera la memoria

	public function __destruct() {
		unset($this);
	}
}