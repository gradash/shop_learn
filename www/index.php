<?php

require_once '../config/config.php'; //constants and configs
require_once '../library/mainFunctions.php';

// which controller to work
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';


// which function from controller to use
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';



loadPage($smarty, $controllerName, $actionName);

