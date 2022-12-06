<?php
    require_once('./controlador/SessionController.php');

   

    if(isset($_POST['flogin'])){

      $login_controller = new SessionController();

      $flogin = $_POST['flogin'];
      $fpass = MD5($_POST['fpass']);
  
      $objlogin = new SessionController();

      if($objlogin ->login($flogin,$fpass) == true){

        header('Location: ./menu/menu.php');
        die();
      }else{
         echo "<script> alert('Usuario y Contraseña no validos'); </script>";
         return false;
         //header('Location: /suri/index.php');
        //echo ("Usuario y Contraseña no validos");
      }

     }else{   
       
   

?>
<html lang="en">
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Sistema de inspecciones</title>
  <link rel="stylesheet" href="./public/estilos.css">
</head>
<body>
  <div class="container">
    <section class="box_class">
      <div class="header_class">
        <div class="circule_class"></div>
        <h2 align ="center">Ingreso al Sistema</h2>
      </div>
      <br>
      <h3 align="center">Login</h3>
      <form action="" method="post" class="form_class" action="/suri/index.php">
        <div class="form_class--input">
          <label for="inUsuario">Nombre de Usuario</label>
          <input type="text" name="flogin" id="flogin">
        </div>
        <br>
        <div class="form_class--input">
          <label for="inClave">Contraseña</label>
          <input type="password" name="fpass" id="fpass">
        </div>
        
        <div >
        </div>
        
        <div >
          <button type="submit" class="form_class--button">Acceder</button>
        </div>
        <br>
        <br>
        
      </form>
      
    </section>
  </div>
</body>
</html>
<?php
}

?>
