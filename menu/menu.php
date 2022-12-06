<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SURI</title>


        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto:ital@0;1&display=swap" rel="sylesheet">

        <link href="css/estilosmenu.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="header" ><h3>Bienvenido a SURI</h3></div>
        <div class="circule_class"></div>
        <a href="#" class="btn-menu" >Menú <i class="icono fa fa-bars" aria-hidden="true"></i></a>
        
        <div class="contenedor-menu">
            
            <ul class="menu">
                

                <li><a href="#"><i class="icono izquierda fa fa-home" aria-hidden="true"></i>Inicio</i></a>
                <li><a href="#usuario"><i class="icono izquierda fa fa-user-circle" aria-hidden="true"></i>Usuarios<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                  <ul>
                    <li><a href="../vistas/usuarios/Usuarios.php">Registrar Usuario</a></li>
                    <li><a href="../vistas/usuarios/userlist.php">Listar Usuarios</a></li>
                    <li><a href="">Cambiar Contraseña</a></li>
                  </ul>
                </li>
        
                <li><a href="#usuario"><i class="icono izquierda fa fa-cog" aria-hidden="true"></i>Cargos<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                    <ul>
                      <li><a href="../vistas/Cargos/cargos.php">Registrar Cargo</a></li>
                      <li><a href="../vistas/Cargos/cargoslist.php">Listar Cargos</a></li>
                    </ul>
                </li>
        
                <li><a href="#inspecion"><i class="icono izquierda fa fa-pencil-square-o" aria-hidden="true"></i></i>Inspeciones<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                    <ul>
                      <li><a href="../vistas/inspecciones/inspecciones.php">Registrar Inspección</a></li>
                      <li><a href="../vistas/inspecciones/inspeccioneslist.php">Listar Inspecciones</a></li>
                    </ul>
                </li>
                        
                <li><a href="/suri/index.php"><i class="icono izquierda fa fa-pencil-square-o" aria-hidden="true"></i>Salir</i></a>
              </ul>
            </div>

                  
            <script scr="https://code.jquery.com/jquery-migrate-1.4.1.js"></script>
        
            
       
        
    </body>
</html>