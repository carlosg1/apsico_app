$(document).ready(function() {

    $('#btnAltaEmpresaSiguiente').click(function() {

       $.ajax({
            async: false,
            cache: false,
            data: {
                profesionalEmail: document.getElementById('altaEmpresaEmail').value,
                profesionalPassword: document.getElementById('altaEmpresaPassword').value,
                profesionalApellido: document.getElementById('altaEmpresaApellidoUsuario').value,
                profesionalNombre: document.getElementById('altaEmpresaNombreUsuario').value,
                profesionalEspecialidad: document.getElementById('altaEmpresaEspecialidad').value,
                empresaTipo: document.getElementById('altaEmpresaEmpresaTipo').value,
                empresaNombre: document.getElementById('altaEmpresaNombreEmpresa').value,
                empresaTelefono: document.getElementById('altaEmpresaTelefono').value,
                empresaCalle: document.getElementById('altaEmpresaCalle').value,
                empresaNroPuerta: document.getElementById('altaEmpresaNroPuerta').value,
                empresaPais: document.getElementById('altaEmpresaPais').value,
                empresaProvincia: document.getElementById('altaEmpresaProvincia').value,
                empresaCiudad: document.getElementById('altaEmpresaCiudad').value,
            },
            dataType: 'json',
            type: 'POST',
            url: 'alta_empresa.php',
            error: function(data) {
                alert('Se produjo un error al dar de alta la institucion. intente mas tarde.');
                return false;
            },
            success: function(data, textStatus, jqXHR) {
                if(data[0].success === 'true') {
                    document.getElementById('id_usuario').value = data[0].id_usuario;
                    document.getElementById('id_empresa').value = data[0].id_empresa;
                    document.getElementById('frmAltaEmpresa').action ='pa/';
                    document.getElementById('frmAltaEmpresa').submit();
                    return true;
                } else {
                    alert('Error de alta. intente mas tarde');
                }
            }
        });

    });

});

