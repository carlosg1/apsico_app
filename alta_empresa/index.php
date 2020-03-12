<?php 
    require_once('../proxy/conexion.php');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ramabhadra|Lato|Roboto&display=swap" rel="stylesheet">
    <!-- jquery ui -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="../css/mdb.min.css">
    <!-- toast.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="../css/style.css">
    
    <title>Historia Clínica</title>
</head>
<body>



    <!-- liston superior -->
    <div class="container stylish-color-dark fixed-top p-2">

        <span class="text-white texto-apsico">Historia Clinica</span>

    </div>

    <div class="container pt-5">
        <p class="h3 mb-4 mt-4">Alta Instituci&oacute;n</p>
    </div>

    
    <form action="#!" class="text-center p-4" id="frmAltaEmpresa" method="POST">

        <p class="h4">Datos del usuario</p>

        <p>El usuario que esta creando, ademas de un profesional, será el usuario administrador del centro de salud, mas adelante puede cambiar el administrador en el momento que desee.</p>

        <input type="email" name="altaEmpresaEmail" id="altaEmpresaEmail" class="form-control mb-3" placeholder="E-mail">

        <input type="password" name="altaEmpresaPassword" id="altaEmpresaPassword" class="form-control mb-3" placeholder="Clave">

        <input type="text" name="altaEmpresaApellidoUsuario" id="altaEmpresaApellidoUsuario" class="form-control mb-3" placeholder="Apellido Profesional">

        <input type="text" name="altaEmpresaNombreUsuario" id="altaEmpresaNombreUsuario" class="form-control mb-3" placeholder="Nombre profesional">

        <select class="browser-default custom-select" name="altaEmpresaEspecialidad" id="altaEmpresaEspecialidad">
            <option value="" selected disabled>Especialidad</option>
            <option value="1">Psiquiatria</option>
            <option value="2">Kinesiologia</option>
            <option value="3">Clinica</option>
        </select>

        <hr class="bg-primary">
    
        <p class="h4">Datos de la institución</p>

        <select class="browser-default custom-select mb-3" name="altaEmpresaEmpresaTipo" id="altaEmpresaEmpresaTipo">
            <option value="" selected disabled>Tipo institución</option>
            <?php
            $rst_tipo_institucion = "SELECT * FROM empresa_tipo order by empresa_tipo";

            foreach($mbd->query($rst_tipo_institucion) as $fila) {
                echo '<option value="' . $fila[0] . '">' . $fila[1] . '</option>';
            }
            ?>
        </select>

        <input type="text" name="altaEmpresaNombreEmpresa" id="altaEmpresaNombreEmpresa" class="form-control mb-3" placeholder="Nombre Institución">

        <input type="text" name="altaEmpresaTelefono" id="altaEmpresaTelefono" class="form-control mb-3" placeholder="Telefono">

        <input type="text" name="altaEmpresaCalle" id="altaEmpresaCalle" class="form-control mb-3" placeholder="Calle">

        <input type="text" name="altaEmpresaNroPuerta" id="altaEmpresaNroPuerta" class="form-control mb-3" placeholder="Numero puerta">

        <input type="text" name="altaEmpresaPais" id="altaEmpresaPais" class="form-control mb-3" placeholder="Pais">

        <input type="text" name="altaEmpresaProvincia" id="altaEmpresaProvincia" class="form-control mb-3" placeholder="Provincia">

        <input type="text" name="altaEmpresaCiudad" id="altaEmpresaCiudad" class="form-control mb-3" placeholder="Ciudad">

        <div class="col mb-4">
            <button class="btn btn-secondary" type="button" id="btnAltaEmpresaCancelar">Cancelar</button>
            <button class="btn btn-success" type="button" id="btnAltaEmpresaSiguiente">Siguiente</button>
        </div>

        <input type="hidden" name="id_empresa" id="id_empresa" value="">
        <input type="hidden" name="id_usuario" id="id_usuario" value="">
    
    </form>


    

    <!-- jQuery -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <!-- jquery ui -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.js"></script>
    <!-- toast.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- mi propio script -->
    <script src="../js/alta_empresa.js"></script>
    <?php 
        $mdb = null;
    ?>
</body>
</html>