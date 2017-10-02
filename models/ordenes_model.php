<?php
	include_once 'models/model.php';
	class OrdenesModel extends Model{



		function getOrdenes(){
			$sentencia = $this->db->prepare('SELECT * from orden ');
			$sentencia->execute();
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);			
		}

		function guardarOrden($numero,$sucursal,$marca,$chasis,$apertura,$cierre,$retiro){
			$sentencia = $this->db->prepare('INSERT INTO orden(numero, sucursal, marca, chasis, fecha_apertura, fecha_cierre, fecha_retiro, estado) VALUES (?,?,?,?,?,?,?,"PENDIENTE")');
			$sentencia->execute(array($numero,$sucursal,$marca,$chasis,$apertura,$cierre,$retiro));
					
		}



	}

?>