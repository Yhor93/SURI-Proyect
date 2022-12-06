<?php 
require_once('../../controlador/UserController.php');

$id = $_POST['user'];

$users_controller = new UserController();

$objeto = $users_controller->delete($id);
 
if($objeto){
  echo "<script> alert('Usuario Eliminado'); </script>";
}else{
  echo "<script> alert('Error Verifique'); </script>";
}  
header("Location: ../usuarios/userlist.php");
die();    
?>