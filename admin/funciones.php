<?php
	require 'conn.php';
	class methods{
		public function login($user, $password){
			global $pdo;

			$query = $pdo->prepare("SELECT * FROM users WHERE usuario = :us AND contraseña = :con");

			$query->execute([
				'us' => $user,
				'con' => $password
			]);
			return $query->fetch();
		}

		public function titulo($titulo){
			global $pdo;

			$query = $pdo->prepare("UPDATE data SET _data = :tit WHERE info = 'titulo'");

			$query->execute([
				'tit' => $titulo
			]);

			if($query)
				return true;
			else{
				return false;
			}

		}

		public function subtitulo($subtitulo){
			global $pdo;

			$query = $pdo->prepare("UPDATE data SET _data = :sub WHERE info = 'subtitulo'");

			$query->execute([
				'sub' => $subtitulo
			]);

			if($query)
				return true;
			else{
				return false;
			}
			
		}
	}
?>