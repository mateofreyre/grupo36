<?php

session_start();
if(!isset($_SESSION['rol'])){
	$_SESSION['rol']=null;
}

ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

require_once('controller/ResourceController.php');
require_once('controller/permission.php');
require_once 'vendor/autoload.php';

require_once('model/PDORepository.php');
require_once('model/UserRepository.php');
require_once('model/User.php');

require_once('view/TwigView.php');
require_once('view/Home.php');
require_once('view/Login.php');
//require_once('view/agregar_usuario.php');

if(isset($_GET["action"])) {

	if(is_null($_SESSION['rol'])){
		$current_rol = 3;
	}
	else{
		$current_rol = $_SESSION['rol'];
	}
	$method = $_GET["action"];
	if(in_array($method, $permission_array[$current_rol])){
		ResourceController::getInstance()->$method();
	}
	else{
		echo "no se encuentra habilitado";
	}
}
else{
    ResourceController::getInstance()->home();
}
?>
