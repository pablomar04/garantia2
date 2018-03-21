<?php

	require_once '../models/ordenes_model.php';
	require_once 'api.php';

	class OrdenesApiController  extends Api {

    protected $model;

		function __construct(){
			$this->model = new OrdenesModel();
		}

		function getOrdenes($params = []){
			switch (sizeof($params)) {
				case 0:
					$ordenes = $this->model->getOrdenes();
					return $this->json_response($ordenes, 200);
					break;
				case 1:
				$id_orden = $params[0];
				$orden = $this->model->getOrden($id_orden);
				if ($orden)
					return $this->json_response($orden, 200);
				else
					return $this->json_response("No existe orden", 404);
				break;
				default:
					return $this->json_response("Error", 404);
					break;
			}
		}

		function borrarOrden($params){
			switch (sizeof($params)) {
				case 0:
					return $this->json_response(false, 400);
					break;
				case 1:
				$id_orden = $params[0];
				$orden = $this->model->getOrden($id_orden);
				if ($orden){
					$this->model->borrarOrden($id_orden);
					return $this->json_response("Borrado exitoso", 200);
				}
				else
				{
					return $this->json_response("No existe orden", 404);
				}
				
				default:
					return $this->json_response("Error", 404);
					break;
			}
		}
	}
?>
