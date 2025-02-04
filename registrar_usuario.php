<?php 

    $nombre_completo = isset($_POST["nombre_completo"]);
    $usuario = isset($_POST["usuario"]);
    $password = isset($_POST["password"]);
    $re_password = isset($_POST["re_password"]);
    $alerta = "";

    if(strcasecmp($password, $re_password) !== 0){
        $alerta = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign'></span> El password no no coincide</div>";
        $smarty -> assign("alerta", $alerta);
    }

    $smarty -> display("registrar_usuario.tpl");
?>

