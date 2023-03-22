const formulario = document.getElementById('frminsertsalon');
const input = document.querySelectorAll('#frminsertsalon input');

const expresiones = {

    idSalon: /^[0-9\b-]*$/,
    NombreSalon: /^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
    CantidadPersonasSalon: /^[0-9\b-]*$/,
    CantidadSillas: /^[0-9\b-]*$/,
    Nombredirector: /^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
    Nombredirector2: /^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
    Apellidodirector: /^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
    Apellidodirector2: /^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
}

const validarcampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-circle-check');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-xmark');
        document.querySelector(`#grupo__${campo} .formulario__ipnut-error`).classList.remove('formulario__ipnut-error-activo');

    } else {

        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-xmark');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-circle-check');
        document.querySelector(`#grupo__${campo} .formulario__ipnut-error`).classList.add('formulario__ipnut-error-activo');
    }

}

const validarform = (e) => {
    /* console.log("validando"); */
    switch (e.target.name) {

        case "idSalon":
            validarcampo(expresiones.idSalon, e.target, 'idsalon');

            break;

        case "NombreSalon":

            validarcampo(expresiones.NombreSalon, e.target, 'NombreSalon');

            break;
        case "CantidadPersonasSalon":

            validarcampo(expresiones.CantidadPersonasSalon, e.target, 'CantidadPersonasSalon');


            break;
        case "CantidadSillas":

            validarcampo(expresiones.CantidadSillas, e.target, 'CantidadSillas');

            break;
        case "Nombredirector":

            validarcampo(expresiones.Nombredirector, e.target, 'Nombredirector');

            break;
        case "Nombredirector2":

            validarcampo(expresiones.Nombredirector2, e.target, 'Nombredirector2');

            break;
        case "Apellidodirector":

            validarcampo(expresiones.Apellidodirector, e.target, 'Apellidodirector');

            break;
        case "Apellidodirector2":

            validarcampo(expresiones.Apellidodirector2, e.target, 'Apellidodirector2');

            break;




    }

}

input.forEach((input) => {
    input.addEventListener('keyup', validarform);
    input.addEventListener('blur', validarform);
});

formulario.addEventListener('click', (e) => {
    e.preventDefault();
});


function mostrarDatosSalon() {
    console.log("entrando mostrando data salon");

    $.ajax({ url: 'modelo/mostrarDatosSalon.php' }).done(function(r) {
        console.log("Mostrando data salon satisfactoriamente");
        $('#tablaDatosSalon').html(r);
    })
}

function modificarDatos(id) {

    console.log("entrando a modificar datos con ajax");
    $('#Modalsalon1').html('');
    $('#Modalsalon1').html('Modificar Datos');
    $('#idSalon').prop({
        'readonly': true
    })
    $('#accion').val('modificar');
    console.log($("#accion").val());
    $('#idSalon').val(id);
    /* ModificarAjax(); */

}



function ModificarAjax() {

    var datos = $('#frminsertsalon').serialize();
    console.log(datos); /* pa saber si tomó los datos */

    $.ajax({
        type: 'POST',
        url: '',
        async: true,
        data: datos,
        success: function(data, response) {
            console.log("este es modificar Ajax");
            console.log(data);


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
                    title: "Modificado",
                    text: "Ahora puedes encontrarlo en el registro",
                    icon: "success",
                    button: "Salir",
                });
                mostrarDatosSalon();
                $('input').val('');
                $('#accion').val('insertar');
                console.log($("#accion").val());
            }

        },
        error: function(error) {
            console.log(error);
        }


    });

}

function eliminarDatos(idSalon) {

    swal({
            title: "¿Está seguro?",
            text: "Se va a eliminar el registro seleccionado",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {



            if (willDelete) {

                console.log("entrando a eliminar datos con ajax");
                console.log("id de salon : " + idSalon);
                // Hacer una petición AJAX para llamar al método eliminarDatos() del modelo
                $.ajax({
                    url: "",
                    type: "POST",
                    data: {
                        accion: "eliminar",
                        idSalon: idSalon
                    },
                    success: function(response) {

                        swal("¡Hecho!", response, "success");

                        console.log(response);
                        // Recargar la página o actualizar los datos en la vista
                        mostrarDatosSalon();
                    },
                    error: function(xhr, status, error) {
                        swal("Advertencia", "Ha ocurrido un error al eliminar el salón.", "warning");
                    }
                });

            } else {
                swal("Muy Bien, registro eliminado");
            }

        });




}




$(document).ready(function() {

    //primer mostrar tabla
    mostrarDatosSalon();
    /* console.log($("#accion").val()); */



    $("#incluir2").on("click", function(event) {
        event.preventDefault();
        // console.log("insertar salon en la BD");
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
                console.log("entrando a insertar con Ajax");
                console.log(data);


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
                        icon: "success",
                        button: "Salir",
                    });
                    mostrarDatosSalon();
                    $('input').val('');
                    $('#accion').val('insertar');
                    console.log($("#accion").val());
                }

            },
            error: function(error) {
                console.log(error);
            }


        });

    }


});