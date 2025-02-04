<?php
/* Smarty version 3.1.36, created on 2025-02-04 15:59:15
  from 'C:\xampp7_3\htdocs\smarty_php\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_67a22b439b9360_60030779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '041d0ccaacf24511ccaaf0e32181beee9c43f794' => 
    array (
      0 => 'C:\\xampp7_3\\htdocs\\smarty_php\\templates\\menu.tpl',
      1 => 1738679858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a22b439b9360_60030779 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="default col-md-3">
    <div class+"list-group">
        <a href="#" class="list-group-item active">Menu Usuario</a>
        <a href="cerrar.php" class="list-group-item active">Cerrar Sessión</a>
        <a href="index.php?acc=registrar_usuario" class="list-group-item active">Registrar Usuario</a>
        <a href="index.php?acc=administrar_usuario" class="list-group-item active">Administrar Usuario</a>
        <a href="index.php?acc=reporte_usuario" class="list-group-item active">Reporte Usuario</a>
    </div>

    <br>

    <div class+"list-group">
        <a href="#" class="list-group-item active">Menu Empleado</a>
        <a href="index.php?acc=registrar_empleado" class="list-group-item active">Registrar Empleado</a>
        <a href="index.php?acc=administrar_empleado" class="list-group-item active">Administrar Empleado</a>
        <a href="index.php?acc=reporte_empleado" class="list-group-item active">Reporte Empleado</a>
    </div>
</div><?php }
}
