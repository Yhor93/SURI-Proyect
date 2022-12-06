<?php 
require_once('../../controlador/InspeccionController.php');

$id = $_POST['inspeccion'];

$inspecciones_controller = new InspeccionController();

$objeto = $inspecciones_controller->delete($id);
 
if($objeto){
  echo "<script> alert('Registro de Inspección Eliminado'); </script>";
}else{
  echo "<script> alert('Error Verifique'); </script>";
}  
header("Location: ../inspecciones/inspeccioneslist.php");
die();    
?>