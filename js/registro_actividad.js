const formulario = document.getElementById('frminsertActividad');
const input = document.querySelectorAll('#frminsertActividad input');

const expresiones = {
    Estatus: /^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,10}$/,
    NombreActividad: /^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
    FechaActividad: /^\d{4}([\-/.])(0?[1-9]|1[1-2])\1(3[01]|[12][0-9]|0?[1-9])$/,
    Participantes: /^[0-9\b-]*$/,
    CantidadEncuentros: /^[0-9\b-]*$/,
    HoraInicio: /^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$/,
    Cedula: /^[0-9\b-]{7,9}$/,
    Nombre1: /^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
    Nombre2: /^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
    Apellido1: /^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
    Apellido2: /^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
    Telefono: /^[0-9]{4}[0-9]{7,8}$/,
    HoraCierre: /^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$/,
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
    document.querySelector(`#grupo__${campo} i`).classList.remove('fa-xmark');
    document.querySelector(`#grupo__${campo} i`).classList.remove('fa-circle-check');

}

const validarform = (e) => {
    /* console.log("validando"); */
    switch (e.target.name) {

        case "Estatus":
            validarcampo(expresiones.Estatus, e.target, 'Estatus');

            break;

        case "NombreActividad":

            validarcampo(expresiones.NombreActividad, e.target, 'NombreActividad');

            break;
        case "FechaActividad":

            validarcampo(expresiones.FechaActividad, e.target, 'FechaActividad');


            break;
        case "Participantes":

            validarcampo(expresiones.Participantes, e.target, 'Participantes');

            break;
        case "CantidadEncuentros":

            validarcampo(expresiones.CantidadEncuentros, e.target, 'CantidadEncuentros');

            break;
        case "HoraInicio":

            validarcampo(expresiones.HoraInicio, e.target, 'HoraInicio');

            break;
        case "Cedula":

            validarcampo(expresiones.Cedula, e.target, 'Cedula');

            break;
        case "Nombre1":

            validarcampo(expresiones.Nombre1, e.target, 'Nombre1');

            break;

        case "Nombre2":

            validarcampo(expresiones.Nombre2, e.target, 'Nombre2');

            break;
        case "Apellido1":

            validarcampo(expresiones.Apellido1, e.target, 'Apellido1');

            break;

        case "Apellido2":

            validarcampo(expresiones.Apellido2, e.target, 'Apellido2');

            break;
        case "Telefono":

            validarcampo(expresiones.Telefono, e.target, 'Telefono');

            break;
        case "HoraCierre":

            validarcampo(expresiones.HoraCierre, e.target, 'HoraCierre');

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





function datosSalon() {

    $.ajax({
        url: 'modelo/obtensalon.php',
        type: 'GET',
        dataType: "json",
        success: function(salones_json) {
            console.log(salones_json);
            salones = salones_json;

            //creo q si es así
            let selectSalones = document.getElementById("li-idsalon");
            let options = "";

            //con el arreglo salones, inserto en una lista para el modal
            for (let i = 0; i < salones.length; i++) {
                let salon = salones[i];
                options += "<option value='" + salon.idSalon + "'>" + salon.idSalon + "</option>";
            }

            selectSalones.innerHTML = options;
        },
        error: function() {
            console.log('Hubo un error en la solicitud');
        }
    });

}

function mostrarDatosActividad() {
    //console.log("entrando mostrando data Actividad");

    $.ajax({
        url: 'modelo/mostrarDatosActividad.php'

    }).done(function(r) {
        // console.log("Mostrando data Actividad satisfactoriamente");
        $('#tablaDatosActividad').html(r);
    })
}

function modificarDatosActividad(id) {

    //console.log("entrando a modificar datos Actividad con ajax");
    $('#ModalActividad1').html('');
    $('#ModalActividad1').html('Modificar Datos Actividad');
    $('#idActividad').prop({
        'readonly': true
    })
    $('#accion').val('modificar');
    //console.log($("#accion").val());
    $('#idActividad').val(id);
    /* ModificarAjax; */

}



function ModificarAjax() {

    var datos = $('#frminsertActividad').serialize();
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
                mostrarDatosActividad();
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

function eliminarDatos(idActividad) {




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
                console.log("id de Actividad : " + idActividad);
                // Hacer una petición AJAX para llamar al método eliminarDatos() del modelo
                $.ajax({
                    url: "",
                    type: "POST",
                    data: {
                        accion: "eliminar",
                        idActividad: idActividad
                    },
                    success: function(response) {

                        swal("¡Hecho!", response, "success");

                        console.log(response);
                        // Recargar la página o actualizar los datos en la vista
                        mostrarDatosActividad();
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

    mostrarDatosActividad();
    datosSalon();
    console.log($("#accion").val());



    $("#incluir3").on("click", function(event) {
        event.preventDefault();
        console.log("insertar Actividad en la BD");
        enviarActividadAjax();

    });











    function enviarActividadAjax() {

        var datos = $('#frminsertActividad').serialize();
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
                        text: "Ahora puedes encontrar la Actividad en el registro",
                        icon: "success",
                        button: "Salir",
                    });
                    mostrarDatosActividad();
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