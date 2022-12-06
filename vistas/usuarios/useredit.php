<?php 
require_once('../../controlador/UserController.php');

$users_controller = new UserController();

$user = $users_controller->read($_POST['user']);
 
if( empty($user) ) {
  $template = '
  <div class="container">
  <p class="item  error">No existe el usuario <b>%s</b></p>
  </div>
  <script>
    window.onload = function (){
    reloadPage("usuarios")
    }
  </script>
  ';  
  printf($template, $_POST['user']);
     
  }else{

      for ($n=0; $n < count($user); $n++) { 
        $documento = $user[$n]['usu_numerodocumento'];
        $nombre = $user[$n]['usu_nombres'];
        $email = $user[$n]['usu_correo'];
        $telef = $user[$n]['usu_telefono'];
        $id = $user[$n]['usu_id'];
      }
    
      if(isset($_POST['fnumdoc'])){

        $user = $users_controller->update($_POST['user']);

        $update_user = array(
          'usu_id' => $_POST['fid'],
          'usu_numerodocumento' => $_POST['fnumdoc'],
          'usu_nombres' => $_POST['fnom'],
          'usu_login' => $_POST['fusr'],
          'usu_correo' => $_POST['femail'],
          'usu_telefono' => $_POST['ftel'],
          'usu_estado' => $_POST['fest']
        );
    
        $user_data = $users_controller->update($update_user);
        header("Location: ../usuarios/userlist.php");
    }else{
        
    }  
      
?>


<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login - Sistema de inspecciones</title>
      <link rel="stylesheet" href="../../public/estilos.css">
  </head>
  <body>
    <div class="container">
        <section class="box_form">
          <div class="header_form">
            <div class="circule_form"></div>
            <h2>Registro de usarios</h2>
          </div>
          <br>
          <h3>Actualizar datos Usuarios</h3>
          <br>
          <form  class="form-horizontal row-fluid"  action="" method="post"  >
            <input type="hidden" name="fid" id="fid" value="<?php echo($id); ?>">
            <div class="row">
              <div class="col-label">
                <label>Numero de Identificación</label>
              </div>
              <div class="col-input">
                <input type="text" name="fnumdoc" id="fnumdoc" value="<?php echo($documento); ?>">
              </div>
            </div>
            <div class="row">
              <div class="col-label">
                  <label>Nombres</label>
              </div>
              <div class="col-input">
                <input type="text" name="fnom" id="fnom" value="<?php echo($nombre); ?>">
              </div>
            </div>
            <div class="row">
                <div class="col-label">
                  <label>Email</label>
                </div>
                <div class="col-input">
                  <input type="text" name="femail" id="femail" value="<?php echo($email); ?>" >
                </div>
            </div>
           
            <div class="row">
              <div class="col-label">
                <label>Télefono</label>
              </div>
              <div class="col-input">
                <input type="text" name="ftel" id="ftel" value="<?php echo($telef); ?>">
              </div>
            </div>
          
            <div class="row">
              <div class="col-label">
                <label>Estado</label>
              </div>
              <div class="col-input">
                <select name="fest" id="fest" required>
                  <option value="">Seleccione opcion...</option>
                  <option value="1"> Activo</option>
                  <option value="0"> Inactivo</option>
                </select>
              </div>
            </div>
            
            <div class="row">
              <div class="col-input">
                <button tipy="submit" class="form_class--button">Actualizar Datos</button>
              </div>
            <div class="row">
              <div class="col-input">
                <button tipy="button" class="form_class--button">Cancelar</button>
              </div>
            </div>  
         </form>
        </section>
      </div>
  </body>
</html>
<?php
  }
?>