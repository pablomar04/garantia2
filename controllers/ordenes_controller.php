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
				isset($_POST['envio'])&&!empty($_POST['envio'])
				){

				$numero = $_POST['numero'];
				$sucursal = strtoupper ($_POST['sucursal']);
				$marca = strtoupper($_POST['marca']) ;
				$chasis = strtoupper($_POST['chasis']);
				$apertura = $_POST['apertura'];
				$cierre = $_POST['cierre'];
				$envio = $_POST['envio'] ;
				$comentario =  isset($_POST['comentario']) ? $_POST['comentario'] : "" ;
				$this->model->guardarOrden($numero,$sucursal,$marca,$chasis,$apertura,$cierre,$envio,$comentario);
				header('Location:'.HOME);
				
			} else{
				$this->view->crearError('Faltaron completar datos - Los datos no se grabaron');
			}	

		}

		function destroy ($params){
			$id_orden = $params[0];
			$this->model->borrarOrden($id_orden);
			header('Location:'.HOME);
		}

		function showOrden($params){
			$id_orden = $params[0];
			$numero_orden = $this->model->getOrden($id_orden);
			$this->view->showOrden($id_orden,$numero_orden,$this->model->getOrdenReclamos($id_orden));

		}



	}
?>