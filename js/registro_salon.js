$(document).ready(function() {

    //primer mostrar tabla
    mostrarDatosSalon();



    $("#incluir2").on("click", function(event) {
        event.preventDefault();
        console.log("insertar1")
        enviarAjax();
        mostrarDatosSalon();



    });

    function enviarAjax() {

        var datos = $('#frminsertsalon').serialize();
        console.log(datos); /* pa saber si tomó los datos */

        $.ajax({
            type: 'POST',
            url: '',
            async: true,
            data: datos,
            success: function(data) {
                console.log(data);
            },
            error: function(error) {
                console.log(error);
            }


        });

    }

    function mostrarDatosSalon() {
        console.log("entrando mostrando data salon");

        $.ajax({
            url: 'modelo/mostrarDatosSalon.php'

        }).done(function(r) {
            console.log("Mostrando data salon satisfactoriamente");
            $('#tablaDatosSalon').html(r);
        })
    }
});

$("#modificar").on("click", function() {
    confirmar();

    $('#si').on('click', function() {

        i
        console.log("Modificar1");
        var datos = new FormData();
        datos.append('accion', 'modificar');
        datos.append('idSalon', $("#idSalon").val());
        datos.append('NombreSalon', $("#NombreSalon").val());
        datos.append('CantidadPersonasSalon', $("#CantidadPersonasSalon").val());
        datos.append('CantidadSillas', $("#CantidadSillas").val());
        enviaAjax(datos, 'incluir');



    });

});