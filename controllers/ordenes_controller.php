<?php
	include_once 'controllers/controller.php';
	include_once 'views/ordenes_view.php';
	include_once 'models/ordenes_model.php';

	class OrdenesController extends Controller{

		function __construct(){
			$this->view = new OrdenesView();
			$this->model = new OrdenesModel();
		}

		function index(){
			$this->view->mostrarOrdenes($this->model->getOrdenes());
		}



	}
?>