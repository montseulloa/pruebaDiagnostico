<?php
  session_start();
  require 'admin/funciones.php';
  $obj = new methods();

  if(isset($_POST['user'], $_POST['password'])){
    $valid = $obj->login($_POST['user'], $_POST['password']);
    echo print_r($valid);

    if($valid){
      $_SESSION['admin'] = true;
      header('location: admin/panelAdmin.php');
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Panel de administrador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
  </head>
  <body>
    <h2>Panel de administrador</h2>
    <form action="" method="post">
      <input type="text" placeholder="Usuario" name="user">
      <input type="password" placeholder="Contraseña" name="password">
      <input type="submit" value="Iniciar Sesion">
    </form>
    
  </body>
</html>