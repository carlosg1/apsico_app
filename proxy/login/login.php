<?php

    $usuario = htmlentities($_POST['usuario']);
    $clave   = htmlentities($_POST['clave']);

    require_once('../conexion.php');

    $qry_usuario = "select * from vw_usuario where correo = '$usuario'";

    $rst_usuario = $mbd->query($qry_usuario);

    if($rst_usuario->rowCount() == 0){
        echo '{"success":"false","errorMsg":"El usuario no existe"}';
        exit;
    }

    $reg_usuario = $rst_usuario->fetch(PDO::FETCH_OBJ);

    if($reg_usuario->clave != $clave){
        echo '{"success":"false","errorMsg":"clave incorrecta"}';
        exit;
    }

    echo '{"success":"true","email":"' . $usuario . '"}';

    exit;

?>