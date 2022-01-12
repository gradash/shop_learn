<?php


$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
echo 'Connection controller = ' . $controllerName . "</br>";


$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';
echo 'Forming page function = '. $actionName . "</br>";


include_once '../controllers/' . $controllerName . 'Controller.php';



$function = $actionName . 'Action';
echo 'Full function name = ' . $function . "</br>";


$function();
