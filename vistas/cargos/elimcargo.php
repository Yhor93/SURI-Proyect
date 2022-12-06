<?php 
require_once('../../controlador/CargoController.php');

$id = $_POST['cargo'];

$cargos_controller = new CargoController();

$objeto = $cargos_controller->delete($id);
 
if($objeto){
  echo "<script> alert('Cargo Eliminado'); </script>";
}else{
  echo "<script> alert('Error Verifique'); </script>";
}  
header("Location: ../cargos/cargoslist.php");
die();    
?>