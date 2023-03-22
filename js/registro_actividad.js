const formulario = document.getElementById('frminsertActividad');
const input = document.querySelectorAll('#frminsertActividad input');
let camposValidos = true;

const expresiones = {
    Estatus: /^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,10}$/,
    NombreActividad: /^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/,
    FechaActividad: /^\d{4}([\-/.])(0?[1-9]|1[1-2])\1(3[01]|[12][0-9]|0?[1-9])$/,
    Participantes: /^[0-9\b-]*$/,
    CantidadEncuentros: /^[0-9\b-]*$/,
    HoraInicio: /^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$/,
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
            if (!expresiones.NombreActividad.test(e.target.value)) {

                camposValidos = false;
            } else { camposValidos = true; }
            console.log(camposValidos);
            break;
        case "FechaActividad":

            validarcampo(expresiones.FechaActividad, e.target, 'FechaActividad');
            if (!expresiones.NombreActividad.test(e.target.value)) {

                camposValidos = false;
            } else { camposValidos = true; }
            console.log(camposValidos);


            break;
        case "Participantes":

            validarcampo(expresiones.Participantes, e.target, 'Participantes');
            if (!expresiones.NombreActividad.test(e.target.value)) {

                camposValidos = false;
            } else { camposValidos = true; }
            console.log(camposValidos);

            break;
        case "CantidadEncuentros":

            validarcampo(expresiones.CantidadEncuentros, e.target, 'CantidadEncuentros');
            if (!expresiones.NombreActividad.test(e.target.value)) {

                camposValidos = false;
            } else { camposValidos = true; }
            console.log(camposValidos);

            break;
        case "HoraInicio":

            validarcampo(expresiones.HoraInicio, e.target, 'HoraInicio');
            if (!expresiones.NombreActividad.test(e.target.value)) {

                camposValidos = false;
            } else { camposValidos = true; }
            console.log(camposValidos);

            break;

        case "HoraCierre":

            validarcampo(expresiones.HoraCierre, e.target, 'HoraCierre');
            if (!expresiones.NombreActividad.test(e.target.value)) {

                camposValidos = false;
            } else { camposValidos = true; }
            console.log(camposValidos);

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

function solicituderror() {

    console.log("algo salio mal papu, verifica los campos ingresados");
    Swal.fire({
        title: 'Campos inválidos',
        text: 'Por favor, revise los campos ingresados',
        icon: 'warning',
        confirmButtonText: 'Aceptar'
    });
}




/* function datosNacionalidad() {

    $.ajax({
        url: 'modelo/obtensalon.php',
        type: 'GET',
        dataType: "json",
        success: function(salones_json) {
            console.log(salones_json);
            salones = salones_json;

            //creo q si es así
            let selectSalones = document.getElementById("Salon_idSalon");
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
 */
function datosSalon() {

    $.ajax({
        url: 'modelo/obtensalon.php',
        type: 'GET',
        dataType: "json",
        success: function(salones_json) {
            console.log(salones_json);
            salones = salones_json;

            //creo q si es así
            let selectSalones = document.getElementById("Salon_idSalon");
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


function datosresponsable() {

    $.ajax({
        url: 'modelo/obtenresponsable.php',
        type: 'GET',
        dataType: "json",
        success: function(responsable_json) {
            console.log(responsable_json);
            responsable = responsable_json;

            //creo q si es así
            let selectresponsable = document.getElementById("responsable_RCedula");
            let options = "";

            //con el arreglo responsable, inserto en una lista para el modal
            for (let i = 0; i < responsable.length; i++) {
                let resp = responsable[i];
                options += "<option value='" + resp.RCedula + "'>" + resp.Nombre1 + "</option>";
            }

            selectresponsable.innerHTML = options;
        },
        error: function() {
            console.log('Hubo un error en la solicitud');
        }
    });

}


function mostrarTablas() {
    //console.log("entrando mostrando data Actividad");

    $.ajax({
        url: 'modelo/mostrarDatosActividad.php'

    }).done(function(r) {
        //tabla Actividad
        $('#tablaDatosActividad').html(r);

    });

    $.ajax({
        url: 'modelo/mostrarDatosResponsable.php'

    }).done(function(r) {
        //tabla Responsble
        $('#tablaDatosResponsable').html(r);

    });

}

function modificarDatosActividad(id) {

    //console.log("entrando a modificar datos Actividad con ajax");
    $('#ModalActividad1').html('');
    $('#ModalActividad1').html('Datos Actividad');
    $('#responsable_RCedula').prop({
        'readonly': true
    })
    $('#accion').val('modificar');
    //console.log($("#accion").val());
    $('#responsable_RCedula').val(id);
    /* ModificarAjax; */


}

//aqui me aseguro que el valor sea insertar y que si se escogio insertar por el boton azul de la tabla responsable, pase automaticamente la cedula del responsable

function InsertDatosActividad(id) {

    //console.log("entrando a modificar datos Actividad con ajax");
    $('#ModalActividad1').html('');
    $('#ModalActividad1').html('Datos Actividad');
    $('#responsable_RCedula').prop({
        'readonly': true
    })
    $('#accion').val('insertar');
    $('#responsable_RCedula').val(id);



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
                mostrarTablas();
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
                        mostrarTablas();
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

function eliminarresponsable(responsable_RCedula) {
    swal({
            title: "¿Está seguro?",
            text: "Se va a eliminar el registro seleccionado",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {

                console.log("entrando a eliminar responsable datos con ajax");
                console.log("id de responsable : " + responsable_RCedula);
                // Hacer una petición AJAX para llamar al método eliminarDatos() del modelo
                $.ajax({
                    url: "./modelo/gestionresponsable.php",
                    type: "POST",
                    data: {
                        accion: "eliminar",
                        responsable_RCedula: responsable_RCedula
                    },
                    success: function(response) {

                        swal("¡Hecho!", response, "success");

                        console.log(response);
                        // Recargar la página o actualizar los datos en la vista
                        mostrarTablas();
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

    mostrarTablas();
    datosSalon();
    datosresponsable();
    console.log($("#accion").val());


    // aquí trato d enviar x ajax
    $("#incluir3").on("click", function(event) {
        event.preventDefault();
        if (camposValidos) {
            console.log(camposValidos);
            enviarActividadAjax();
        } else {
            console.log("el campo")
            solicituderror();
        }
    });

    // aquí trato d enviar x ajax responsables
    $("#incluir4").on("click", function(event) {
        console.log("incluir4")
        event.preventDefault();
        enviarResponsableAjax();
    });



    function enviarResponsableAjax() {

        /* let contenido = $('#frminsertResponsable').serialize();
        console.log(contenido);
 */

        var datos = new FormData();
        datos.append('idNacionalidad', $("#idNacionalidad").val());
        datos.append('responsable_RCedula', $("#responsable_RCedula").val());
        datos.append('Nombre1', $("#Nombre1").val());
        datos.append('Nombre2', $("#Nombre2").val());
        datos.append('Apellido1', $("#Apellido1").val());
        datos.append('Apellido2', $("#Apellido2").val());
        datos.append('Telefono', $("#Telefono").val());
        datos.append('accion', $("#accion").val());


        for (const entry of datos) {
            console.log(entry[0] + ': ' + entry[1]);
        }

        console.log(datos); /* pa saber si tomó los datos */

        console.log('A pelo: ' + datos);
        console.log('Con JSON.stringify: ' + JSON.stringify(datos));



        $.ajax({
            async: true,
            url: 'controlador/gestionresponsable.php',
            type: 'POST',
            contentType: false,
            data: datos,
            processData: false,
            cache: false,
            success: function(data, response) {
                console.log("entrando a insertar responsable con Ajax");
                console.log(data);
                a = response;
                if (a === "done") {
                    console.log(a);
                    swal({
                        title: "Hay un error",
                        text: "Algo esta mal, vuelve a chequear la conexion",
                        icon: "waring",
                        button: "Salir",
                    });

                } else {
                    console.log(a);

                    swal({
                        title: "Registrado",
                        text: "Ahora puedes encontrar la Actividad en el registro",
                        icon: "success",
                        button: "Salir",
                    });
                    mostrarTablas();
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


    function enviarActividadAjax() {

        //var datos1xxxx = $('#frminsertActividad').serialize();

        var datos = new FormData();
        datos.append('responsable_RCedula', $("#responsable_RCedula").val());
        datos.append('idActividad', $("#idActividad").val());
        datos.append('NombreActividad', $("#NombreActividad").val());
        datos.append('FechaActividad', $("#FechaActividad").val());
        datos.append('Participantes', $("#Participantes").val());
        datos.append('CantidadEncuentros', $("#CantidadEncuentros").val());
        datos.append('Salon_idSalon', $("#Salon_idSalon").val());
        datos.append('HoraInicio', $("#HoraInicio").val());
        datos.append('Estatus', $("#Estatus").val());
        datos.append('HoraCierre', $("#HoraCierre").val());
        datos.append('accion', $("#accion").val());

        for (const entry of datos) {
            console.log(entry[0] + ': ' + entry[1]);
        }

        console.log(datos); /* pa saber si tomó los datos */

        console.log('A pelo: ' + datos);
        console.log('Con JSON.stringify: ' + JSON.stringify(datos));


        $.ajax({
            async: true,
            url: '',
            type: 'POST',
            contentType: false,
            data: datos,
            processData: false,
            cache: false,
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
                    mostrarTablas();
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