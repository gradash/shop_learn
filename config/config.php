<?php

//constants for working with controllers
const PathPrefix = '../controllers/';
const PathPostfix = 'Controller.php';


//used template
$template = 'default';


//template files path
define('TemplatePrefix', "../views/$template/"); //using define because of expression
const TemplatePostfix = '.tpl';


//templates path in webspace
define('TemplateWebPath', "../www/templates/$template/");


//Smarty init (full path to Smarty.class.php)
require_once('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('TemplateWebPath', TemplateWebPath);


