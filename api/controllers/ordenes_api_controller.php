<?php

	require_once '../models/ordenes_model.php';
	require_once 'api.php';

	class OrdenesApiController  extends Api {

    protected $model;


		function __construct(){
			parent::__construct();
			$this->model = new OrdenesModel();


		}

		public function getOrdenes($url_params = []){
			switch (sizeof($url_params)) {
				case 0:
					$ordenes = $this->model->getOrdenes();
					return $this->json_response($ordenes, 200);
					break;
				case 1:
				$id_orden = $url_params[0];
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

		public function borrarOrden($url_params){
			switch (sizeof($url_params)) {
				case 0:
					return $this->json_response(false, 400);
					break;
				case 1:
				$id_orden = $url_params[0];
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

		public function crearOrden ($url_params = []){
			if(sizeof($url_params) == 0){
				$body= json_decode($this->raw_data);
				$numero = 	$body->numero;
				$sucursal = $body->sucursal;
				$marca = $body->marca;
				$chasis = $body->chasis;
				$apertura = $body->apertura;
				$cierre = $body->cierre;
				$envio = $body->envio;
				$estado =	$body->estado;
				$comentario =	$body->comentario;
				$orden = $this->model->guardarOrden($numero,$sucursal,$marca,$chasis,$apertura,$cierre,$envio,$comentario);
				return $this->json_response($orden, 200);

			}else{
				return $this->json_response(false,404);
			}
		}
	}
?>
