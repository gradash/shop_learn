<?php
/* Smarty version 4.0.3, created on 2022-01-20 12:00:15
  from 'C:\xampp\htdocs\shop_learn\views\default\leftcolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_61e940bf6b14e4_95901440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61abff1a202bfd988694c5f265f238e81a323570' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_learn\\views\\default\\leftcolumn.tpl',
      1 => 1642676414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e940bf6b14e4_95901440 (Smarty_Internal_Template $_smarty_tpl) {
?> <div id="leftColumn">

    <div id="leftMenu">
        <div class="menuCaption">Menu:</div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div><?php }
}
