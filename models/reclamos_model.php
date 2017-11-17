<?php
	include_once 'models/model.php';
	class ReclamosModel extends Model{



		function getReclamos(){
			$sentencia = $this->db->prepare('SELECT * from reclamo ');
			$sentencia->execute();
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);			
		}

		


	}

?>