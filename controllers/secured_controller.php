<?php

include_once 'controllers/controller.php';


	class SecuredController extends Controller{


  function __construct(){
  		
  	session_start();
  	if(!isset($_SESSION['usuario'])){
  		header('Location:'.LOGIN);
  		die();
  	}
  }

  }
?>