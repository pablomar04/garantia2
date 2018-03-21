<?php

define('RESOURCE', 0);
define('PARAMS', 1);

require_once 'config/config_api.php';
require_once '../models/model.php';
require_once 'controllers/ordenes_api_controller.php';


function parseURL($url)
{
  $urlExploded = explode('/', $url);
  $arrayReturn[ConfigApi::$RESOURCE] = $urlExploded[RESOURCE] . '#' . $_SERVER['REQUEST_METHOD'];
  $arrayReturn[ConfigApi::$PARAMS] = isset($urlExploded[PARAMS]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}

if(isset($_GET['resource'])){
   $urlData = parseURL($_GET['resource']);
    $resource = $urlData[ConfigApi::$RESOURCE]; //home
    if(array_key_exists($resource,ConfigApi::$RESOURCES)){
        $params = $urlData[ConfigApi::$PARAMS];
        $controller_method = explode('#',ConfigApi::$RESOURCES[$resource]);
        $controller = new $controller_method[0]();
        $method = $controller_method[1];
        if(!empty($params)){
            echo $controller->$method($params);
        }
        else{
            echo $controller->$method();
        }
    }
}

?>
