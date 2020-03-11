<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ramabhadra|Lato|Roboto&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- toast.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
    <title>Historia Cl&iacute;nica</title>
  </head>
  <body>

  <!-- Start your project here-->  
  <!-- liston superior -->
  <div class="container stylish-color-dark p-2">

    <span class="text-white texto-apsico">Historia Cl&iacute;nica</span>

  </div>

  <div class="container">
    <div class="row">
      <div class="col">
        <div class="d-flex justify-content-center pt-5">
          <img src="img/login.png" alt="Acceso al sistema">
        </div>
      </div>
    </div>
  </div>

  <form class="p-2 m-1" id="formLogin" action="agenda/" method="POST">

    <p class="h4 mb-4 text-center">Ingresar</p>

    <input type="text" id="loginFormUsuario" name="loginFormUsuario" class="form-control mb-4" placeholder="Email">

    <input type="password" id="loginFormPassword" name="loginFormPassword" class="form-control mb-4" placeholder="Contraseña">

    <input type="hidden" id="loginFormNombre" name="loginFormNombre" value="">
    <input type="hidden" id="loginFormApellido" name="loginFormApellido" value="">
    <input type="hidden" id="loginFormEmail" name="loginFormEmail" value="">
    <input type="hidden" id="loginFormLogin" name="loginFormLogin" value="">

    <div class="d-flex justify-content-between">
        <div>
            <a href="">No recuerdo la contraseña</a>
        </div>
    </div>

    <button class="btn btn-info btn-block my-4" id="loginBotonIngresar" type="button">Ingresar</button>

    <div class="text-center">
        <p>No es miembro??
            <a href="alta_empresa/">Registrese</a>
        </p>
    </div>
</form>


  
  <!-- End your project here-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
    <!-- toast.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- mi propio script -->
    <script src="js/app.js"></script>
  </body>
</html>