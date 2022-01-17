<?php

/*main page controller
function testAction(){
	echo 'IndexController.php -> testAction';
}
*/


//main page creation with Smarty

function indexAction($smarty)
{
    $smarty->assign('pageTitle', 'Main page');
    loadTemplate($smarty, 'index');
}