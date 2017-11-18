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
			if (isset($_POST['id_orden'])&&!empty($_POST['id_orden'])&&
				isset($_POST['numero_orden'])&&!empty($_POST['numero_orden'])&&
				isset($_POST['version'])&&!empty($_POST['version'])&&
				isset($_POST['tipo'])&&!empty($_POST['tipo'])&&
				isset($_POST['fecha_reclamo'])&&!empty($_POST['fecha_reclamo'])&&
				isset($_POST['estado'])&&!empty($_POST['estado'])
				){
				$id_orden = $_POST['id_orden'];
				$numero_orden = $_POST['numero_orden'];
				$version =  ($_POST['version']);
				$numero_reclamo=$numero_orden.$version;
				$tipo = $_POST['tipo'] ;
				$fecha_reclamo = $_POST['fecha_reclamo'];
				$estado = $_POST['estado'];

				$this->model->guardarReclamo($id_orden,$numero_reclamo,$tipo,$fecha_reclamo,$estado);
				header('Location:'.HOME);
				
			} else{
				$this->view->crearError('Faltaron completar datos - Los datos no se grabaron');
			}	

		}

		function destroy (){
		}

		function showReclamo(){
		}



	}
?>