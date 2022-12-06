<?php
    require_once('../../controlador/UserController.php');

   

    if(isset($_POST['fnumdoc'])){

        $users_controller = new UserController();

        $new_user = array(
            'usu_tipodocumento' => $_POST['tipdoc'],
            'usu_numerodocumento' => $_POST['fnumdoc'],
            'usu_nombres' => $_POST['fnomuser'],
            'usu_login' => $_POST['fusr'],
            'usu_password' => MD5($_POST['fnumdoc']),
            'usu_correo' => $_POST['femail'],
            'usu_telefono' => $_POST['ftel'],
            'usu_tipousuario' => $_POST['tipuser'],
            'usu_estado' => '1'
        );
    
    $user_data = $users_controller->create($new_user);
    header("Location: ../usuarios/userlist.php");
     }else{   
       
   

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
                    <h2 align ="center">Registro de usarios</h2>
                </div>
                <br>
                <h3>Crear Usuarios</h3>
                <br>
                <form class="form-horizontal row-fluid"  action="" method="post"  >
                    <div class="row">
                        <div class="col-label">
                            <label for="f1">Tipo de identificación</label>
                        </div>
                        <div class="col-input">
                            <select name="tipdoc" id="tipdoc" required>
                                <option value=""> Seleccione una opción</option>
                                <option value="CC">Cédula de ciudadanía</option>
                                <option value="CE">Cédula de extranjería</option>
                                <option value="PP">Pasaporte</option>
                                <option value="TI">Tarjeta de identidad</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-label">
                            <label for="f2" >Número de identificación</label>
                        </div>
                        <div class="col-input">
                            <input type="text" name="fnumdoc" id="fnumdoc" class="input" placeholder="Tu númenro de identificacion..." required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-label">
                          <label for="f3" >Nombres completos</label>
                        </div>
                        <div class="col-input">
                            <input type="text" name="fnomuser" id="fnomuser" class="input" placeholder="Tus nombres completos..." required>
                        </div>
                    </div>
                           
                    <div class="row">
                        <div class="col-label">
                          <label for="f4" >Usuario</label>
                        </div>
                        <div class="col-input">
                            <input type="text" name="fusr" id="fusr" class="input" placeholder="Registre su nombre de usuario..." required>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-label">
                          <label for="f7" >Correo electórnico</label>
                        </div>
                        <div class="col-input">
                            <input type="text" name="femail" id="femail" class="input" placeholder="Tus nombres completos...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-label">
                          <label for="f8" >Teléfono</label>
                        </div>
                        <div class="col-input">
                            <input type="text" name="ftel" id="ftel" class="input" placeholder="Registre su numero de teléfono...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-label">
                            <label for="f1">Tipo de usuario</label>
                        </div>
                        <div class="col-input">
                            <select name="tipuser" id="tipuser" required>
                                <option value="1">Seleccione una opción</option>
                                <option value="2">Administrador del sistema</option>
                                <option value="3">Supervisor</option>
                                <option value="4">Coordinador</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" align="center">
                        <div class="col-input">
                            <button type="submit"  class="form_class--button">Registrar Datos</button> 
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