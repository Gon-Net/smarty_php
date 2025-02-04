<?php
    include("includes/config.ini.php");

    $smarty -> assign("titulo", "Inicio");
    $smarty -> display("header.tpl");  
    $smarty -> display("menu.tpl");   
    //----------------------- trabaja con el menu//
    if(isset($_GET["acc"]) && isset($_GET["acc"]) == "registrar_usuario"){
        include("registrar_usuario.php");
    }
    //-------------------------------------------// 
    $smarty -> display("footer.tpl");
?>

