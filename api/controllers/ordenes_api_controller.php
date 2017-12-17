<?php

	require_once '../models/ordenes_model.php';

	class OrdenesApiController   {

    protected $model;

		function __construct(){
			$this->model = new OrdenesModel();
		}

		function getOrdenes(){
			$ordenes = $this->model->getOrdenes();
      return json_encode($ordenes);
		}

	}
?>
