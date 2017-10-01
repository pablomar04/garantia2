<?php
	include_once 'views/view.php';

	class NavView extends View {



  		function mostrar($pagina){
  			
  			$this->smarty->display($pagina.'.tpl');

  		}


  		
	}
?>