<?php 
 class ConfigApp
 {
     public static $ACTION = 'action';
     public static $PARAMS = 'params';
     public static $ACTIONS = [
       'home'=> 'index',
       'agregarOrden'=> 'agregarOrden',
       ''=> 'index',
       'borrarOrden' => 'borrarOrden',
       
       'ordenes' => 'mostrarOrdenes',
     ];
 
 }


?>