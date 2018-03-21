<?php
define('ACTION', 0);
define('PARAMS', 1);

include_once 'config/config_app.php';
include_once 'models/model.php';
include_once 'views/view.php';
include_once 'controllers/controller.php';
include_once 'controllers/secured_controller.php';
include_once 'controllers/reclamos_controller.php';
include_once 'controllers/ordenes_controller.php';
include_once 'controllers/login_controller.php';

function parseURL($url)
{
  $urlExploded = explode('/', trim($url,'/'));
  $arrayReturn[ConfigApp::$ACTION] = $urlExploded[ACTION];
  $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[PARAMS]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}

if(isset($_GET['action'])){
   $urlData = parseURL($_GET['action']);
    $action = $urlData[ConfigApp::$ACTION]; //home
    if(array_key_exists($action,ConfigApp::$ACTIONS)){
        $params = $urlData[ConfigApp::$PARAMS];
        $action = explode('#',ConfigApp::$ACTIONS[$action]);
        $controller = new $action[0]();
        $action = $action[1];
        if(isset($params) &&  $params != null){
            echo $controller->$action($params);
        }
        else{
            echo $controller->$action();
        }
    }
}

?>
