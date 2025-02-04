<?php
/* Smarty version 3.1.36, created on 2025-02-03 22:52:12
  from 'C:\xampp\htdocs\smarty\templates\hola_mundo.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_67a13a8c9d6911_20122431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8708259bc2ea27b439f18e20c21534a20532159' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\hola_mundo.html',
      1 => 1738619527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a13a8c9d6911_20122431 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>   
    <title>Hola desde smarty</title>
</head>
<body>
    <center><h3><?php echo $_smarty_tpl->tpl_vars['mi_variable']->value;?>
</h3></center>
    <center><h2><?php echo $_smarty_tpl->tpl_vars['variable1']->value;?>
</h2></center>
    <center><h2><?php echo $_smarty_tpl->tpl_vars['variable2']->value;?>
</h2></center>
    <hr>
    Variables declaradas en la plantilla html
    <hr>
    
    <?php $_smarty_tpl->_assignInScope('mi_variable', "hola mundo desde la plantilla smarty de html");?>
    <center><h1><?php echo $_smarty_tpl->tpl_vars['mi_variable']->value;?>
</h1></center>
    
    <hr>
    <h3>Array</h3>
    <hr>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayName']->value, 'datos');
$_smarty_tpl->tpl_vars['datos']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['datos']->value) {
$_smarty_tpl->tpl_vars['datos']->do_else = false;
?>
    <b>Nombre: </b> <?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>

    <b>Apellido: </b> <?php echo $_smarty_tpl->tpl_vars['datos']->value['apellido'];?>

    <br>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>
</html><?php }
}
