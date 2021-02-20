<?php
	try{
		$pdo = new PDO('mysql:host=localhost; dbname=admin', 'root', '');
	}catch(PDOException $e) {
		echo "Conexión con base de datos fallida" . $e;
	}
?>