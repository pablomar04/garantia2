<?php
 class ConfigApi
 {
     public static $RESOURCE = 'resource';
     public static $PARAMS = 'params';
     public static $METHOD = 'method';
     public static $RESOURCES = [
       'orden#GET' => 'OrdenesApiController#getOrdenes',
       'orden#DELETE' => 'OrdenesApiController#borrarOrden'


     ];

 }


?>
