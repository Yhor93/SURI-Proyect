<?php
    require_once('../../controlador/InspeccionController.php');

   
    if(isset($_POST['fdoc'])){

        $inspeccion_controller = new InspeccionController();

        $new_inspeccion = array(
          'ins_idubicacion' => $_POST['fubic'],
          'ins_cargo' => $_POST['fcarg'],
          'ins_fechahora' => $_POST['ffecha'],
          'ins_anexos' => $_POST['fanexo'],
          'ins_observaciones' => $_POST['fobserva']
           
        );
    

    $inspeccion_data = $inspeccion_controller->create($new_inspeccion);
    header("Location: ../inspecciones/inspeccioneslist.php");


     }else{   
    
       
   

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inpecciones - Sistema de inspecciones</title>
        <link rel="stylesheet" href="../../public/estilos.css">
    </head>
    <body>
        <div class="container">
            <section class="box_form">
                <div class="header_form">
                    <div class="circule_form"></div>
                    <h2 align ="center">Registro de Inspecciones</h2>
                </div>
                <br>
                <h3>Crear Inspección</h3>
                <br>
                <form class="form-horizontal row-fluid"  action="" method="post"  >
                    <input type="hidden" name="fdoc" id="fdoc" value="">
                    <div class="row">
                        <div class="col-label">
                            <label for="f1">Ubicación</label>
                        </div>
                        <div class="col-input">
                            <select name="fubic" id="fubic" required>
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
                          <select name="fcarg" id="fcarg" required>
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
                            <input type="date" name="ffecha" id="ffecha" required>
                        </div>
                    </div>
                           
                    <div class="row">
                        <div class="col-label">
                          <label for="f4" >Anexos</label>
                        </div>
                        <div class="col-input">
                            <input type="text" name="fanexo" id="fanexo" placeholder="cargar anexo..." >
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-label">
                          <label for="f7" >Observaciones</label>
                        </div>
                        <div class="col-input">
                            <textarea name="fobserva" id="fobserva"></textarea>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-input">
                            <button typy="submit" class="form_class--button">Registrar Datos</button> 
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