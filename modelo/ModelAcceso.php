<?php 

require_once("conexion.class.php");

class ControlAcceso{
   var $conexion;

 
    function __construct(){
        $this->conexion = new DBManager;
    }

 
  public function ControlAcceso(){ 
    self::__construct();
    } 



    function validar00003($us){ 
        $query = "SELECT * FROM tusuarios WHERE usu_login = '$us'  ";
        $conectar = $this->conexion->conectar(); 
        if ($result = mysqli_query($conectar, $query)) {
            return $result;
        }
    }



     
    
}

?>