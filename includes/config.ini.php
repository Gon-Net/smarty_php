<?php
    include("libs/smarty.class.php");
    $smarty = new smarty;

    function conexion(){
        $servidor = "localhost";
        $usuario = "root";
        $password = "";
        if($conexion = mysqli_connect($servidor, $usuario, $password, "bd_smarty")){
            //mysql_query("use bd_smarty");
            echo "<script> alert('Conexion con exito'); </script>";
            return $conexion;
        }
    }
    
?>