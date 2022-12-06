<?php 

require_once('../../controlador/InspeccionController.php');

$inspecciones_controller = new InspeccionController();
$inspecciones = $inspecciones_controller->read();

if( empty($inspecciones) ) {
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
  <title>Listado de Inspeciones</title>
  <link rel="stylesheet" href="../../public/estilos.css">
</head>

<body>
  <div class="container">
    <section class="box_form">
      <tr>
        <div class="header_form">
          <div class="circule_form"></div>
          <h2 align="center">Sistema único de Registro de Inspecciones-Listar Inspeciones</h2>
        </div>
        <table class=" table">
          <div>
            <br>
            <h3>Listado de inspecciones</h3>
            <br>
            <div class="body_form">
              <thead">
                <tr>
                  <th colspan="2">
                    <form method="POST" action="../inspecciones/inspecciones.php">
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
                  <th scope="col">Ubicación</th>
                  <th scope="col">Cargo Inspector</th>
                  <th scope="col">Fecha Inspección</th>
                  <th scope="col">Anexos</th>
                  <th scope="col">Observaciones</th>
                  <th scope="col">Editar</th>
                  <th scope="col">Eliminar</th>
                  
                </thead>
            </div>
          </div>

          <tbody>
            <?php
              for ($n=0; $n < count($inspecciones); $n++) { ?>

                  <tr>
                    <td class="center "><?php echo $inspecciones[$n]['ins_id']; ?></td>
                    <td class="center "><?php echo $inspecciones[$n]['ins_idubicacion']; ?></td>
                    <td class="center "><?php echo $inspecciones[$n]['ins_cargo']; ?></td>
                    <td class="center "><?php echo $inspecciones[$n]['ins_fechahora']; ?></td>
                    <td class="center "><?php echo $inspecciones[$n]['ins_anexos']; ?></td>
                    <td class="center "><?php echo $inspecciones[$n]['ins_observaciones']; ?></td>
                  

                    <td class="center ">
                      <form method="POST" action="../inspecciones/inspeccionesedit.php">
                        <input type="hidden" name="inspeccion" value=" <?php echo $inspecciones[$n]['ins_id']; ?> ">
                        <input class="btn_edit" type="submit" value="Editar">
                      </form>
                    </td>

                    
                    <td class="center">
                      <form method="POST" action="../inspecciones/eliminspeccion.php">
                        <input type="hidden" name="inspeccion" value=" <?php echo $inspecciones[$n]['ins_id']; ?> ">
                        <input class="btn_del" type="submit" value="Eliminar">
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
