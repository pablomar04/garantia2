<?php

  include_once 'views/view.php';
	class OrdenesView extends View {

		function mostrarOrdenes($ordenes){
  			$this->smarty->assign('ordenes',$ordenes);
  			$this->smarty->assign('titulo','Ordenes MVC');
  			$this->smarty->display('index.tpl');

  		}

		


	}

?>