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

      function showOrden($id_orden,$numero_orden,$orden){
        $this->smarty->assign('id_orden',$id_orden);
        $this->smarty->assign('numero_orden',$numero_orden);
        $this->smarty->assign('orden',$orden);
        
        $this->smarty->display('orden.tpl');

      }

		


	}

?>