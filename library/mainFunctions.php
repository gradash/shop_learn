<?php
//auto commentary test (/**)
/**
 * @param $smarty
 * @param $controllerName
 * @param string $actionName
 * @return void
 */

function loadPage($smarty, $controllerName, $actionName = 'index')
{
    //using constants from config.php
    require_once PathPrefix . $controllerName . PathPostfix;

    $function = $actionName . 'Action';
    $function($smarty);
}

function loadTemplate($smarty, $templateName)
{

    $templateName .= TemplatePostfix;
    $smarty->display($templateName);
}

/**
 * @param $rs
 * @return array|false
 */
function createSmartyRsArray($rs){
    if (!$rs) return false;
    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($rs)){
        $smartyRs[]=$row;
    }
    return $smartyRs;
}


//for debug purposes
function d($value = null, $die = 1)
{
    echo 'Debug: <br /><pre>';
    print_r($value);
    echo '</pre>';

    if ($die) die;
}