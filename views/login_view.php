<?php

  include_once 'views/view.php';
  
	class LoginView extends View {

		public function mostrarLogin($error=''){
  			$this->smarty->assign('error',$error);
  			$this->smarty->display('./templates/login/index.tpl');

  		}



	}

?>