<?php

  include_once 'views/view.php';
	class ReclamosView extends View {

		function mostrarReclamos($reclamos){
  			$this->smarty->assign('reclamos',$reclamos);
  			
  			$this->smarty->display('./reclamos/index.tpl');

  		}
    function mostrarCrearReclamos($id_orden,$numero_orden){

        $this->smarty->assign('id_orden',$id_orden);
        $this->smarty->assign('numero_orden',$numero_orden);
        $this->smarty->display('./reclamos/formCrearReclamo.tpl');
        
      }

    function crearError($error){
        $this->smarty->assign('error',$error);
        $this->smarty->display('./reclamos/formCrearReclamo.tpl');
      }

	}

?>