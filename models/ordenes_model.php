<?php
	include_once 'models/model.php';
	class OrdenesModel extends Model{



		function getOrdenes(){
			$sentencia = $this->db->prepare('SELECT * from orden ');
			$sentencia->execute();
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);			
		}



	}

?>