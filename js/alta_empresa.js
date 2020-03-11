$(document).ready(function() {

    $('#btnAltaEmpresaSiguiente').click(function() {

        alert('Click en siguiente');

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
                alert('salio por error');
            },
            success: function(data, textStatus, jqXHR) {
                alert('salio por success');
            }
        });

    });

});

