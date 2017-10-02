<?php 
 class ConfigApp
 {
     public static $ACTION = 'action';
     public static $PARAMS = 'params';
     public static $ACTIONS = [
       'home'=> 'index',
       'agregarOrden'=> 'create',
       'guardarOrden'=> 'store',	
       ''=> 'index',
       'borrarOrden' => 'borrarOrden',
       
       'ordenes' => 'mostrarOrdenes',
     ];
 
 }


?>