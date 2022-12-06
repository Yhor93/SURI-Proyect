<?php
    require_once('../../controlador/CargoController.php');

   

    if(isset($_POST['fcodcar'])){

        $cargo_controller = new CargoController();

        $new_cargo = array(
            'car_codigo' => $_POST['fcodcar'],
            'car_descripcion' => $_POST['fdesc'],
           
        );
    
    $cargo_data = $cargo_controller->create($new_cargo);
    header("Location: ../cargos/cargoslist.php");

     }else{   
       
   

?>


<!DOCTYPE html>
<html lang="es">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Registrar Cargos</title>
      <link rel="stylesheet" href="../../public/estilos.css">
  </head>

  <body>
      <div class="container">
          <section class="box_form">
            <div class="header_form">
              <div class="circule_form"></div>
              <h2>Cargos</h2>
            </div>
            <br>
            <h3>Registrar Cargos</h3>
            <br>
            <form  class="form-horizontal row-fluid"   method="post"  >
              <div class="row">
                <div class="col-label">
                  <label>Código del Cargo</label>
                </div>
                <div class="col-input">
                  <input type="text" name="fcodcar" id="fcodcar" required >
                </div>
              </div>
             
              <div class="row">
                <div class="col-label">
                  <label>Descripción del Cargo</label>
                </div>
                <div class="col-input">
                  <input type="text" name="fdesc" id="fdesc" required>
                </div>
              </div>
              <div class="row">
                <div class="col-input">
                  <button type="submit"class="form_class--button">Guardar Datos</button>
                </div>
              </form>
          </section>

        </div>

  
  </body>
  
</html>
<?php
   }
?>  