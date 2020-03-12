<?php

require_once('../proxy/conexion.php');

$dato = $_POST;

// obtengo el proximo id de AUTO_INCREMENT
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

$qry_id_usuario = "SELECT AUTO_INCREMENT AS id_usuario
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'c1560393_ba2'
AND   TABLE_NAME   = 'usuario'";

$rst_id_usuario = $mbd->query($qry_id_usuario);

$reg_id_usuario = $rst_id_usuario->fetch(PDO::FETCH_OBJ);

$id_usuario = $reg_id_usuario->id_usuario;


$query_empresa = "INSERT INTO empresa(id_empresa_tipo, nombre, calle_nombre, calle_nro, pais, provincia, ciudad, telefono) ";
$query_empresa .= "VALUES(" . $reg_id_empresa->id_empresa;
$query_empresa .= ", '" . $dato['empresaNombre'] . "'";
$query_empresa .= ", '" .  $dato['empresaCalle'] . "'";
$query_empresa .= ", '" . $dato['empresaNroPuerta'] . "'";
$query_empresa .= ", '" . $dato['empresaPais'] . "'";
$query_empresa .= ", '" . $dato['empresaProvincia'] . "'";
$query_empresa .= ", '" . $dato['empresaCiudad'] . "'";
$query_empresa .= ", '" . $dato['empresaTelefono'] . "'";
$query_empresa .= ")";

$registros = $mbd->exec($query_empresa);


$query_usuario = "INSERT INTO usuario(id_usuario, correo, id_empresa, id_usuario_tipo, id_especialidad, clave, nombre, apellido) ";

$query_usuario .= "VALUES(" . $id_usuario . ", '" . $dato['profesionalEmail'] . "', " . $reg_id_empresa->id_empresa . ", 1, " . $dato['profesionalEspecialidad'] . ", '" . $dato['profesionalPassword'] . "', '" . $dato['profesionalNombre'] . "', '" . $dato['profesionalApellido'] . "')";

$registros = $mbd->exec($query_usuario);


$reg_id_empresa = null;
$rst_id_empresa = null;
$reg_id_usuario = null;
$rst_id_usuario = null;

echo '[{"success":"true","id_empresa":"' . $id_empresa . '","id_usuario":"' . $id_usuario . '"}]';

exit;


?>
