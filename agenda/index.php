<?php 

    $usuario    = htmlentities($_POST['loginFormUsuario']);
    $clave      = htmlentities($_POST['loginFormPassword']);
    $nombre     = htmlentities($_POST['loginFormNombre']);
    $apellido   = htmlentities($_POST['loginFormApellido']);
    $email      = htmlentities($_POST['loginFormEmail']);
    $login      = htmlentities($_POST['loginFormLogin']);

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
    <link rel="stylesheet" href="../css/agenda.css">
    <title>Agenda</title>
</head>
<body>

    <!-- liston superior -->
    <div class="container stylish-color-dark p-2">

        <span class="text-white texto-apsico">APSICO</span>

        <span class="text-white texto-login"> - Agenda</span>

    </div>

    <div class="container">
        <span class="agenda-titulo-usuario">Profesional: </span>
        <span class="agenda-texto-usuario p-2"><?php echo $nombre . ' ' . $apellido; ?></span>
    </div>

    <div class="container">
        <span class="h2-responsive">Agenda</span>
    </div>

    <div class="md-form pl-2 pr-2">
        <input placeholder="Seleccione una fecha" type="button" role="button" id="date-picker-1" class="form-control datepicker-1">
        <label for="date-picker-1" class="pl-4">Fecha</label>
    </div>
    

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
    <script src="../js/agenda.js"></script>
    
</body>
</html>