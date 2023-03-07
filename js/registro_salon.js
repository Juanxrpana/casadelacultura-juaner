$(document).ready(function() {

    //primer mostrar tabla
    mostrarDatosSalon();



    $("#incluir2").on("click", function(event) {
        event.preventDefault();
        console.log("insertar1")
        enviarAjax();




    });

    function enviarAjax() {

        var datos = $('#frminsertsalon').serialize();
        console.log(datos); /* pa saber si tomó los datos */

        $.ajax({
            type: 'POST',
            url: '',
            async: true,
            data: datos,
            success: function(data, response) {
                console.log(data);
                mostrarDatosSalon();
                $('input').val('');
                a = response;
                if (a === "done") {
                    swal({
                        title: "Hay un error",
                        text: "Algo esta mal, vuelve a chequear la conexion",
                        icon: "waring",
                        button: "Salir",
                    });

                } else {
                    swal({
                        title: "Registrado",
                        text: "Ahora puedes encontrarlo en el registro",
                        icon: "error",
                        button: "Salir",
                    });
                }

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