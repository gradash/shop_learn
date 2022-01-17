<?php



function loadPage($controllerName, $actionName = 'index'){
	//using constants from config.php
	require_once PathPrefix . $controllerName . PathPostfix;

	$function = $actionName . 'Action';
    $function();
}