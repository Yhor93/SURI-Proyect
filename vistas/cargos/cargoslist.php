<?php 

require_once('../../controlador/CargoController.php');

$cargos_controller = new CargoController();
$cargos = $cargos_controller->read();

if( empty($cargos) ) {
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
  <title>Listado de Cargos</title>
  <link rel="stylesheet" href="../../public/estilos.css">
</head>

<body>
  <div class="container">
    <section class="box_form">
      <tr>
        <div class="header_form">
          <div class="circule_form"></div>
          <h2 align="center">Sistema Único de Registro de Inspeccionea - Listar Cargos</h2>
        </div>
        <table class=" table">
          <div>
            <br>
            <h3>Listado de Cargos</h3>
            <br>
            <div class="body_form">
              <thead">
                <tr>
                  <th colspan="2">
                    <form method="POST" action="../cargos/cargos.php">
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
                </tr>

                  <th scope="col">Nro.</th>
                  <th scope="col">Código</th>
                  <th scope="col">Descripción</th>
                  <th scope="col">Editar</th>
                  <th scope="col">Eliminar</th>
                  
                </thead>
            </div>
          </div>

          <tbody>
            <?php
              for ($n=0; $n < count($cargos); $n++) { ?>

                  <tr>
                    <td class="center "><?php echo $cargos[$n]['car_id']; ?></td>
                    <td class="center "><?php echo $cargos[$n]['car_codigo']; ?></td>
                    <td class="center "><?php echo $cargos[$n]['car_descripcion']; ?></td>
                    
                    <td class="center ">
                      <form method="POST" action="../cargos/cargoedit.php">
                        <input type="hidden" name="cargo" value=" <?php echo $cargos[$n]['car_id']; ?> ">
                        <input class="btn_edit" type="submit" value="Editar">
                      </form>
                    </td>

                    
                    <td>
                      <td class="center">
                      <form method="POST" action="../cargos/elimcargo.php">
                        <input type="hidden" name="cargo" value=" <?php echo $cargos[$n]['car_id']; ?> ">
                        <input class="btn_del" type="submit" value="Eliminar" >
                      </form>
                    </td>
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
