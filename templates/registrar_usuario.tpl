<div class="default col-md-6">
    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <center> <b> Agregar usuario </b> </center>
        </div>
        <div class="panel panel-body" width="95%">
            <form name="agregar_usuario" method="post">
                {if isset($alerta)} 
                    {$alerta} 
                {/if}
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Nombre Completo</span>
                        <input type="text" name="nombre_completo" id="nombre_completo" class="form-control" placeholder="Ejem: Juan Cori Suxo" value="{$smarty.post.nombre_completo}" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Usuario</span>
                        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Ejem: jcori" value="{$smarty.post.nombre_completo}" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Password</span>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Ejem: **********" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Reingresar Password</span>
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
</div>