<?php
/* Smarty version 4.0.3, created on 2022-01-17 15:22:34
  from 'C:\xampp\htdocs\shop_learn\views\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_61e57baa2e4737_21264361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56640df2f31b0c63c2500c56f2801f2b616f126b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_learn\\views\\default\\header.tpl',
      1 => 1642429227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_61e57baa2e4737_21264361 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="en">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
css/main.css" type="text/css"/>
</head>
<body>
<div id="header">
    <h1>junior web shop - for practice and learning!</h1>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="centerColumn">

    Center Column



<?php }
}
