<?php
	include_once 'models/model.php';
	class OrdenesModel extends Model{



		function getOrdenes(){
			$sentencia = $this->db->prepare('SELECT * from orden ');
			$sentencia->execute();
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);			
		}

		function getOrden($id_orden){
			$sentencia = $this->db->prepare('SELECT numero from orden where id_orden=?');
			$sentencia->execute(array($id_orden));
			return $sentencia->fetch(PDO::FETCH_ASSOC);			
		}

		function guardarOrden($numero,$sucursal,$marca,$chasis,$apertura,$cierre,$envio,$comentario){
			$sentencia = $this->db->prepare('INSERT INTO orden(numero, sucursal, marca, chasis, fecha_apertura, fecha_cierre, fecha_envio, estado, comentario) VALUES (?,?,?,?,?,?,?,"PENDIENTE",?)');
			$sentencia->execute(array($numero,$sucursal,$marca,$chasis,$apertura,$cierre,$envio,$comentario));
					
		}

		function borrarOrden($id_orden){
			$sentencia = $this->db->prepare('DELETE from orden where id_orden=?');
			$sentencia->execute(array($id_orden));

		}

		function getOrdenReclamos($id_orden){
			$sentencia = $this->db->prepare('SELECT o.numero, o.sucursal, o.chasis, r.numero_reclamo, r.estado
FROM orden o INNER JOIN (SELECT * FROM reclamos where id_orden=? ) r ON o.id_orden = r.id_orden');
			$sentencia->execute(array($id_orden));
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);			
		}



	}

?>