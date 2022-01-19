<?php

//main page controller

require_once '../models/CategoriesModel.php';


//main page creation with Smarty

function indexAction($smarty){

    $rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('pageTitle', 'Main page');

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}