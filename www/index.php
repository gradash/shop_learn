<?php


$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
echo 'Connection controller = ' . $controllerName . "</br>";


$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';
echo 'Forming page function = '. $actionName . "</br>";


include_once '../controllers/' . $controllerName . 'Controller.php';



$function = $actionName . 'Action';
echo 'Full function name = ' . $function . "</br>";




//path to controllers
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');

function loadPage($controllerName, $actionName = 'index'){
	include_once PathPrefix . $controllerName . PathPostfix;
	$function = $actionName . 'Action';
    $function();
}