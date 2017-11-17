<?php
	include_once 'controllers/controller.php';
	include_once 'views/reclamos_view.php';
	include_once 'models/reclamos_model.php';
	include_once 'models/ordenes_model.php';

	class ReclamosController extends Controller{

		private $modelOrden;

		function __construct(){
			$this->view = new ReclamosView();
			$this->model = new ReclamosModel();
			$this->modelOrden = new OrdenesModel();
		}

		function index(){
			$this->view->mostrarReclamos($this->model->getReclamos());
		}

		function create($params){
			$id_orden= $params[0];
			$orden = $this->modelOrden->getOrden($id_orden);
			$numero_orden = $orden['numero_orden'];
			$this->view->mostrarCrearReclamos($id_orden,$numero_orden);
		}

		function store(){
			
		}

		function destroy (){
		}

		function showReclamo(){
		}



	}
?>