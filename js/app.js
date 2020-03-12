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
                
                if(data.success == "true") {

                    document.getElementById('loginFormEmail').value = data.email;

                    document.getElementById('formLogin').action = 'agenda/';
                    document.getElementById('formLogin').submit();

                    return true;

                } else {

                    toastr.error("Error de acceso", data.errorMsg);

                    return false;

                }

            }
        })

    });

    
    
    

});
