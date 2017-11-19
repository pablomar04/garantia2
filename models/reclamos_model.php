<?php
	include_once 'models/model.php';
	class ReclamosModel extends Model{



		public function getReclamos(){
			$sentencia = $this->db->prepare('SELECT * from reclamo ');
			$sentencia->execute();
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);			
		}

		public function guardarReclamo($id_orden_fk,$numero_reclamo,$tipo,$fecha_reclamo,$estado){

			$sentencia = $this->db->prepare('INSERT INTO `reclamo`(`id_orden_fk`, `numero_reclamo`, `tipo`, `fecha_reclamo`, `estado`, `MO`, `material`, `MO_externa`, `material_externo`, `total`, `lote`, `fecha lote`) VALUES (?,?,?,?,?,0,0,0,0,0,"","")');
			$sentencia->execute(array($id_orden_fk,$numero_reclamo,$tipo,$fecha_reclamo,$estado));
			
		}


	}

?>