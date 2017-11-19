<?php
	include_once 'controllers/controller.php';
	include_once 'views/login_view.php';
	include_once 'models/login_model.php';

	class LoginController extends Controller{

		function __construct(){
			$this->view = new LoginView();
			$this->model = new LoginModel();
		}

		public function index(){
			$this->view->mostrarLogin();
		}

		public function verify(){
			
			$userName = $_POST['usuario'];
			$password = $_POST['password'];

			if (!empty($userName)&&!empty($password)){

				$user=$this->model->getUser($userName);

				if(!empty($user) && password_verify($password,$user[0]['password'])){
					header('Location:'.HOME);
				}else{
					$this->view->mostrarLogin("Usuario o password no válidos");
				}

			}
		}

	}
?>