<?php
	require 'conn.php';

	if($_POST['type']=="titulo"){
		global $pdo;
			$query = $pdo->prepare("SELECT _data FROM data WHERE info = 'titulo'");
			$query->execute();
			$result = $query->fetch();
			echo '<h1>'  .$result['_data'].  '</h1>';
	}
	elseif($_POST['type']=="subtitulo"){
		global $pdo;
			$query = $pdo->prepare("SELECT _data FROM data WHERE info = 'subtitulo'");
			$query->execute();
			$result = $query->fetch();
			echo '<h3>' .$result['_data']. '</h3>';
	}
?>