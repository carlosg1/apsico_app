<?php

require_once('../proxy/conexion.php');

$dato = $_POST;

$qry_id_empresa = "SELECT AUTO_INCREMENT AS id_empresa
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'c1560393_ba2'
AND   TABLE_NAME   = 'empresa'";


try {
    $rst_id_empresa = $mbd->query($qry_id_empresa);

    $reg_id_empresa = $rst_id_empresa->fetch(PDO::FETCH_OBJ);

    $id_empresa = $reg_id_empresa->id_empresa;

} catch (PDOException $e) {
    print "Error!!: " . $e->getMessage() . "<br/>";
    die();
}




$query_empresa = "INSERT INTO empresa(id_empresa_tipo, nombre, calle_nombre, calle_nro, pais, provincia, ciudad, telefono) 
VALUES($reg_id_empresa->id_empresa);";

$query_usuario = "INSERT INTO usuario(correo, id_empresa, id_usuario_tipo, id_especialidad, clave, nombre, apellido)
VALUES('$dato[\'profesionalEmail\']', $reg_id_empresa->id_empresa);";

$reg_id_empresa = null;
$rst_id_empresa = null;

exit;


?>
