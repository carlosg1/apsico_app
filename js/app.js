$(document).ready(function(){

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-center",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    // controlo los campos login

    $('#loginBotonIngresar').click(function(){

        if($('#loginFormUsuario').val() == "" || $('#loginFormPassword').val() == "") {

            toastr.error("Debe ingresar usuario y contraseña", "Advertencia!!");

            return false;

        }

        // consulta el login

        $.ajax({
            async: false,
            cache: false,
            data: {usuario: $('#loginFormUsuario').val(), clave: $('#loginFormPassword').val()},
            dataType: 'json',
            type: 'POST',
            url: 'proxy/login/login.php',
            error: function(data) {
                console.log('Error : ', data);
                toastr.error("Se produjo un error al ingresar", "Advertencia!!");
                return false;
            },
            success: function(data, textStatus, jqXHR){
                console.log('data : ', data);
                console.log('textStatus : ', textStatus);
                console.log('jqXHR : ', jqXHR);

                if(data.success == "true") {

                    $('#loginFormNombre').val(data.nombre);
                    $('#loginFormApellido').val(data.apellido);
                    $('#loginFormEmail').val(data.email);
                    $('#loginFormLogin').val(data.login);

                    $('#formLogin').submit();

                } else {

                    return false;

                }

            }
        })

    });

    
    
    

});
