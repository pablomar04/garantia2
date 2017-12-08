<?php
	include_once 'models/model.php';
	class OrdenesModel extends Model{



		public function getOrdenes(){
			$sentencia = $this->db->prepare('SELECT * from orden ');
			$sentencia->execute();
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);			
		}

		public function getOrden($id_orden){
			$sentencia = $this->db->prepare('SELECT numero_orden from orden where id_orden=?');
			$sentencia->execute(array($id_orden));
			return $sentencia->fetch(PDO::FETCH_ASSOC);			
		}

		public function guardarOrden($numero,$sucursal,$marca,$chasis,$apertura,$cierre,$envio,$comentario){
			$sentencia = $this->db->prepare('INSERT INTO orden(numero_orden, sucursal, marca, chasis, fecha_apertura, fecha_cierre, fecha_envio, estado, comentario) VALUES (?,?,?,?,?,?,?,"PENDIENTE",?)');
			$sentencia->execute(array($numero,$sucursal,$marca,$chasis,$apertura,$cierre,$envio,$comentario));
					
		}

		public function borrarOrden($id_orden){
			$sentencia = $this->db->prepare('DELETE from orden where id_orden=?');
			$sentencia->execute(array($id_orden));

		}

		public function getOrdenReclamos($id_orden){
			$sentencia = $this->db->prepare('SELECT o.numero_orden, o.sucursal, o.chasis, r.numero_reclamo, r.estado
FROM orden o INNER JOIN (SELECT * FROM reclamo where id_orden_fk=? ) r ON o.id_orden = r.id_orden_fk');
			$sentencia->execute(array($id_orden));
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);			
		}



	}

?>