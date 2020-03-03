<?php

    $usuario = htmlentities($_POST['usuario']);
    $clave   = htmlentities($_POST['clave']);

    // carlosg
    if($usuario == 'carlosgctes@gmail.com' && $clave == '123'){

        echo '{"success":"true","nombre":"Carlos","apellido":"Garcia","email":"carlosgctes@gmail.com","login":"carlosg"}';

        exit;

    }

    $resp = '{"success":"false","errorMsg":"Usuario o contraseña incorrecto. Intente nuevamente con otras credenciales."}';

    echo $resp;

    exit;

?>