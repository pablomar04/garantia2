<?php

include_once 'controllers/controller.php';


	class SecuredController extends Controller{


  function __construct(){
  	
  	session_start();
  	if(isset($_SESSION['usuario'])){
      if (time() - $_SESSION['LAST_ACTIVITY'] > 600) {   
  		header('Location:'.LOGOUT); 
  		die();
      }
      $_SESSION['LAST_ACTIVITY'] = time();
  	}else{
      header('Location:'.LOGOUT); 
      die();

    }

  }

  }
?>