<?php 
require_once('../../controlador/CargoController.php');

$cargos_controller = new CargoController();

$cargo = $cargos_controller->read($_POST['cargo']);

if( empty($cargo) ) {
  $template = '
  <div class="container">
  <p class="item  error">No existe el cargo <b>%s</b></p>
  </div>
  <script>
    window.onload = function (){
    reloadPage("cargos")
    }
  </script>
  ';  
  printf($template, $_POST['cargo']);
     
  }else{

      for ($n=0; $n < count($cargo); $n++) { 
        $codigo = $cargo[$n]['car_codigo'];
        $descripcion = $cargo[$n]['car_descripcion'];
        $id = $cargo[$n]['car_id'];
      }
    
      if(isset($_POST['fcod'])){

        $cargo = $cargos_controller->update($_POST['cargo']);

        $update_cargo = array(
          'car_id' => $_POST['fid'],
          'car_codigo' => $_POST['fcod'],
          'car_descripcion' => $_POST['fdesc']
          
        );
    
        $cargo_data = $cargos_controller->update($update_cargo);
         //var_dump($cargo_data);
       header("Location: ../cargos/cargoslist.php");
    }else{
        
    }  
      
?>


<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cargos - Sistema Ünico de Registro de inspecciones</title>
      <link rel="stylesheet" href="../../public/estilos.css">
  </head>
  <body>
    <div class="container">
        <section class="box_form">
          <div class="header_form">
            <div class="circule_form"></div>
            <h2>Registro de cargos</h2>
          </div>
          <br>
          <h3>Actualizar datos Cargos</h3>
          <br>
          <form  class="form-horizontal row-fluid"  action="" method="post"  >
            <input type="hidden" name="fid" id="fid" value="<?php echo($id); ?>">
            <div class="row">
              <div class="col-label">
                <label>Código del Cargo</label>
              </div>
              <div class="col-input">
                <input type="text" name="fcod" id="fcod" value="<?php echo($codigo); ?>">
              </div>
            </div>
            <div class="row">
              <div class="col-label">
                  <label>Descripción</label>
              </div>
              <div class="col-input">
                <input type="text" name="fdesc" id="fdesc" value="<?php echo($descripcion); ?>">
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