<?php 

require_once('../../controlador/UserController.php');

$users_controller = new UserController();
$users = $users_controller->read();

if( empty($users) ) {
  print( '
    <div class="container">
      <p class="item  error">No hay Usuarios</p>
    </div>
  ');
} 

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado de Usuario</title>
  <link rel="stylesheet" href="../../public/estilos.css">
</head>


<body>
  <div class="container">
    <section class="box_form">
      <tr>
        <div class="header_form">
          <div class="circule_form"></div>
          <h2 align="center">Sistema único de Registro de Inspecciones-Listar Usuario</h2>
        </div>
        <table class=" table">
          <div>
            <br>
            <h3>Listado de usuario</h3>
            <br>
            <div class="body_form">
              <thead">
                <tr>
                  <th colspan="2">
                    <form method="POST" action="../usuarios/usuarios.php">
                      <div class="row" align="center">
                        <div class="col-input">
                          <input type="hidden" name="r" value="user-add">
                          <input class="btn_add" align="center" type="submit"   value="Nuevo">
                        </div>
                      </div>
                    </form>
                    <form method="post" action="../../menu/menu.php">
                      <div class="row" align="center">
                        <div class="col-input">
                          <input class="btn_add" align="center" type="submit"   value="Incio">
                        </div>
                      </div>
                    </form>
                  </th>
                </tr>

                  <th scope="col">Nro.</th>
                  <th scope="col">Identificación</th>
                  <th scope="col">Nombres</th>
                  <th scope="col">Login</th>
                  <th scope="col">Email</th>
                  <th scope="col">Telefono</th>
                  <th scope="col">Editar</th>
                  <th scope="col">Eliminar</th>
                  
                </thead>
            </div>
          </div>

          <tbody>
            <?php
              for ($n=0; $n < count($users); $n++) { ?>

                  <tr>
                    <td class="center "><?php echo $users[$n]['usu_id']; ?></td>
                    <td class="center "><?php echo $users[$n]['usu_numerodocumento']; ?></td>
                    <td class="center "><?php echo $users[$n]['usu_nombres']; ?></td>
                    <td class="center "><?php echo $users[$n]['usu_login']; ?></td>
                    <td class="center "><?php echo $users[$n]['usu_correo']; ?></td>
                    <td class="center "><?php echo $users[$n]['usu_telefono']; ?></td>

                    <td class="center">
                      <form method="POST" action="../usuarios/useredit.php">
                        <input type="hidden" name="user" value=" <?php echo $users[$n]['usu_id']; ?> ">
                        <input class="btn_edit" type="submit" value="Editar">
                      </form>
                    </td>

                    <td class="center">
                      <form method="POST" action="../usuarios/elimuser.php">
                        <input type="hidden" name="user" value=" <?php echo $users[$n]['usu_id']; ?> ">
                        <input class="btn_del" type="submit" value="Eliminar" class="form_class--button_del">
                      </form>
                    </td>
                    
 
                    
                  </tr>
                <?php
                }
                                 
                ?>  
          </tbody>
            
           
        </table>

        </tbody>
       
  </div>
  </section>
  </div>
</body>
 

</html>
