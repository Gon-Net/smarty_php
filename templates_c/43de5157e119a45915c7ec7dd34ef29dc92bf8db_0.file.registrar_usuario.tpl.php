<?php
/* Smarty version 3.1.36, created on 2025-02-04 17:02:45
  from 'C:\xampp7_3\htdocs\smarty_php\templates\registrar_usuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_67a23a255eba71_68256714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43de5157e119a45915c7ec7dd34ef29dc92bf8db' => 
    array (
      0 => 'C:\\xampp7_3\\htdocs\\smarty_php\\templates\\registrar_usuario.tpl',
      1 => 1738684962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a23a255eba71_68256714 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="default col-md-6">
    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <center> <b> Agregar usuario </b> </center>
        </div>
        <div class="panel panel-body" width="95%">
            <form name="agregar_usuario" method="post">
                <?php if ((isset($_smarty_tpl->tpl_vars['alerta']->value))) {?> 
                    <?php echo $_smarty_tpl->tpl_vars['alerta']->value;?>
 
                <?php }?>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Nombre Completo : </span>
                        <input type="text" name="nombre_completo" id="nombre_completo" class="form-control" placeholder="Ejem: Juan Cori Suxo" value="<?php echo $_POST['nombre_completo'];?>
" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Usuario : </span>
                        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Ejem: jcori" value="<?php echo $_POST['usuario'];?>
" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Password : </span>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Ejem: **********" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Reingresar Password : </span>
                        <input type="password" name="re_password" id="re_password" class="form-control" placeholder="Ejem: **********" required>
                    </div>
                </div>

                <center>
                    <input type="submit" name="btn_guardar" value="Guardar Usuario" class="btn btn-primary">
                    <a href="index.php" class="btn btn-danger">Cancelar Registro</a>
                </center>

            </form>
        </div>
    </div>
</div><?php }
}
