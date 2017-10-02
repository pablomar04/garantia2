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

		function create(){
			$this->view->mostrarCrearOrdenes();
		}

		function store(){
			if (isset($_POST['numero'])&&!empty($_POST['numero'])&&
				isset($_POST['sucursal'])&&!empty($_POST['sucursal'])&&
				isset($_POST['marca'])&&!empty($_POST['marca'])&&
				isset($_POST['chasis'])&&!empty($_POST['chasis'])&&
				isset($_POST['apertura'])&&!empty($_POST['apertura'])&&
				isset($_POST['cierre'])&&!empty($_POST['cierre'])&&
				isset($_POST['retiro'])&&!empty($_POST['retiro'])
				){

				$numero = $_POST['numero'];
				$sucursal = isset($_POST['sucursal']) ? strtoupper ($_POST['sucursal']) : "DESCONOCIDA";
				$marca = isset($_POST['marca']) ? strtoupper($_POST['marca']) : "DESCONOCIDA";
				$chasis = isset($_POST['chasis']) ? strtoupper($_POST['chasis']) : "DESCONOCIDO";
				$apertura = isset($_POST['apertura']) ? $_POST['apertura'] : "";
				$cierre = isset($_POST['cierre']) ? $_POST['cierre'] : "";
				$retiro = isset($_POST['retiro']) ? $_POST['retiro'] : "";
				$this->model->guardarOrden($numero,$sucursal,$marca,$chasis,$apertura,$cierre,$retiro);
				header('Location:'.HOME);
				//$this->view->mostrarOrdenes($this->model->getOrdenes());
			} else{
				$this->view->crearError('Faltaron completar datos - Los datos no se grabaron');
			}	

		}



	}
?>