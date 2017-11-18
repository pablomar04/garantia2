<?php 
 class ConfigApp
 {
     public static $ACTION = 'action';
     public static $PARAMS = 'params';
     public static $ACTIONS = [
       'home'=> 'OrdenesController#index',
       'agregarOrden'=> 'OrdenesController#create',
       'guardarOrden'=> 'OrdenesController#store',	
       ''=> 'OrdenesController#index',
       'borrarOrden' => 'OrdenesController#destroy',
       'verOrden' => 'OrdenesController#showOrden',
       'verReclamos' => 'ReclamosController#index',
       'agregarReclamo' => 'ReclamosController#create',
       'guardarReclamo' => 'ReclamosController#store'
       
       
     ];
 
 }


?>