<?php 

    $nombre_completo = $_POST["nombre_completo"];
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $re_password = $_POST["re_password"];
    $conexion = conexion();
    $consultar_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario = '$usuario'");
    $numero_usuarios = mysqli_num_rows($consultar_usuario);

    if(strcasecmp($password, $re_password) !== 0){
        // var_dump( "Si IF" );
        $alerta = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign'></span> El password no coincide</div>";
        
    }else if($numero_usuarios > 0){
        $alerta = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign'></span> El usuario ya se encuentra registrado</div>";
    }else{
        $conexion = conexion();
        $insertar_usuario = mysqli_query($conexion, "INSERT INTO bd_smarty.usuario (nombre_completo, usuario, password) VALUES ('$nombre_completo', '$usuario', md5('$password'))");
        if($insertar_usuario){
            $alerta = "<div class='alert alert-succes' role='alert'> <span class='glyphicon glyphicon-exclamation-sign'></span> Usuario <b>'.$usuario.'</b>se agrego con exito <hr> Bienvenido <b> '.$nombre_completo.' </b> ya puedes acceder al Sistema </div>";
        }else{
            $alerta = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign'></span> Error al guardar, intente de nuevo por favor</div>";
        }
    }
    // else{
    //     var_dump( "No IF" );
    //     $alerta = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign'></span></div>";
    //     $smarty -> assign("alerta", $alerta);
    // }
    $smarty -> assign("alerta", $alerta);
    $smarty -> display("registrar_usuario.tpl");
?>

 