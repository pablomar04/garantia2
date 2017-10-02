<?php

  include_once 'views/view.php';
	class OrdenesView extends View {

		function mostrarOrdenes($ordenes){
  			$this->smarty->assign('ordenes',$ordenes);
  			
  			$this->smarty->display('index.tpl');

  		}

  		function mostrarCrearOrdenes(){
  			$this->smarty->display('formCrear.tpl');
  		}

  		function crearError($error){
  			$this->smarty->assign('error',$error);
  			$this->smarty->display('formCrear.tpl');
  		}

		


	}

?>