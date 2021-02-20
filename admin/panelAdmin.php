<?php
  session_start();
  if(isset($_SESSION['admin'])){
  	require 'funciones.php';
  	$obj = new methods();

  	if(isset($_POST['titulo'])){
  		$actualizar = $obj->titulo($_POST['titulo']);

  		if($actualizar == true){
  			echo 'Titulo actualizado correctamente';
  		}
  	}

  	if(isset($_POST['subtitulo'])){
  		$actualizar = $obj->subtitulo($_POST['subtitulo']);
  		if($actualizar == true){
  			echo 'Subtitulo actualizado correctamente';
  		}
  	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset=UTF-8>
	<title> Panel de administrador </title>
  <style>
    *{font-family: arial;}
    h2{text-align: center;}
    .contenedor-forms{display: flex;justify-content: space-around;}
  </style>
</head>

<body>
    <h2>Panel de administrador</h2>
    <div class="contenedor-forms">

    <div>
      <h3>Modificar titulo</h3>
    	<form action="" method="post">
    		<textarea name="titulo" id="" cols="30" rows="10" placeholder="Título"> </textarea>
    		<input type="submit" value="Actualizar">
    	</form>
    </div>

      <div>
        <h3>Modificar subtitulo</h3>
      	<form action="" method="post">
      		<textarea name="subtitulo" id="" cols="30" rows="10" placeholder="Subtítulo"> </textarea>
      		<input type="submit" value="Actualizar">
      	</form>
      </div>
    </div>
	
</body>
</html>

<?php }else{ header('Location:admin.php'); } ?>