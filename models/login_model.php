<?php
	include_once 'models/model.php';
	
	class LoginModel extends Model{



		public function getUser($userName){

			$sentencia = $this->db->prepare('SELECT * FROM usuario WHERE usuario=? LIMIT 1');
			$sentencia->execute(array($userName));
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);
		
		}

	}

?>