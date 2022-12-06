<?php 
require_once('../../controlador/InspeccionController.php');

$inspecciones_controller = new InspeccionController();

$inspeccion = $inspecciones_controller->read($_POST['inspeccion']);
 
if( empty($inspeccion) ) {
  $template = '
  <div class="container">
  <p class="item  error">No existe el registro de inspección <b>%s</b></p>
  </div>
  <script>
    window.onload = function (){
    reloadPage("usuarios")
    }
  </script>
  ';  
  printf($template, $_POST['inspeccion']);
     
  }else{

      for ($n=0; $n < count($inspeccion); $n++) { 
        $ubicacion = $inspeccion[$n]['ins_idubicacion'];
        $cargo = $inspeccion[$n]['ins_cargo'];
        $fecha = $inspeccion[$n]['ins_fechahora'];
        $anexos = $inspeccion[$n]['ins_anexos'];
        $observ = $inspeccion[$n]['ins_observaciones'];
        $id = $inspeccion[$n]['ins_id'];
      }
    
      if(isset($_POST['fdoc'])){

        $inspeccion = $inspecciones_controller->update($_POST['inspeccion']);

        $update_inspeccion = array(
          'ins_id' => $_POST['fid'],
          'ins_idubicacion' => $_POST['fubic'],
          'ins_cargo' => $_POST['fcarg'],
          'ins_fechahora' => $_POST['ffecha'],
          'ins_anexos' => $_POST['fanexo'],
          'ins_observaciones' => $_POST['fobserva']
          
        );
    
      
        $inspeccion_data = $inspecciones_controller->update($update_inspeccion);
        header("Location: ../inspecciones/inspeccioneslist.php");
     
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
            <h2>Registro de Inspecciones</h2>
          </div>
          <br>
          <h3>Actualizar datos Inspección</h3>
          <br>
          <form  class="form-horizontal row-fluid"  method="post" action=""   >
            <input type="hidden" name="fid" id="fid" value="<?php echo($id); ?>">
             <input type="hidden" name="fdoc" id="fdoc" value="">
            <div class="row">
                        <div class="col-label">
                            <label for="f1">Ubicación</label>
                        </div>
                        <div class="col-input">
                            <select name="fubic" id="fubic">
                              <option value="">Seleccione opcion...</option>
                              <option value="1"> Primera Planta</option>
                              <option value="2"> Segunda Planta</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-label">
                            <label for="f2" >Cargo del inspector</label>
                        </div>
                        <div class="col-input">
                          <select name="fcarg" id="fcarg">
                            <option value="1">Seleccione una opción</option>
                            <option value="2">Administrador del sistema</option>
                            <option value="3">Supervisor</option>
                            <option value="4">Coordinador</option>
                          </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-label">
                          <label for="f3" >Fecha de inspección</label>
                        </div>
                        <div class="col-input">
                            <input type="date" name="ffecha" id="ffecha" value="<?php echo($ubicacion);?>">
                        </div>
                    </div>
                           
                    <div class="row">
                        <div class="col-label">
                          <label for="f4" >Anexos</label>
                        </div>
                        <div class="col-input">
                            <input type="text" name="fanexo" id="fanexo" value="<?php echo($anexos);?>" >
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-label">
                          <label for="f7" >Observaciones</label>
                        </div>
                        <div class="col-input">
                            <textarea name="fobserva" id="fobserva" value="<?php echo($ubicacion);?>"></textarea>
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