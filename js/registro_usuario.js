const formulario = document.getElementById('frminsertUsuario');
const input = document.querySelectorAll('#frminsertUsuario input');

const expresiones = {

    IdUsuario: /^[0-9\b-]*$/,
    privilegio: /^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{4,5}$/,
    Usuario: /^[A-Za-z][A-Za-z0-9_]{7,29}$/,
    clave: /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/,
    respuesta: /^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/

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






}


function mostrarDatosUsuario() {
    console.log("entrando mostrando data Usuario");

    $.ajax({ url: 'modelo/mostrarDatosUsuario.php' }).done(function(r) {
        console.log("Mostrando data Usuario satisfactoriamente");
        $('#tablaDatosUsuario').html(r);
        retornocampos();
    })
}

function modificarUsuario(id) {

    console.log("entrando a modificar datos con ajax");
    $('#ModalUsuario1').html('');
    $('#ModalUsuario1').html('Modificar Datos');
    $('#IdUsuario').prop({
        'readonly': true
    })
    $('#grupo__privilegio').hide();
    $('#accion').val('modificar');
    console.log($("#accion").val());
    $('#IdUsuario').val(id);


}

function obtenerPregunta() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'modelo/obtenpregunta.php', true);
    xhr.responseType = 'json';
    xhr.onload = function() {
        if (xhr.status === 200) {
            var preguntas_json = xhr.response;
            console.log(preguntas_json);
            pregunta = preguntas_json;

            var selectElement = document.getElementById('Seguridad_idPregunta');
            // Limpia las opciones previas
            selectElement.innerHTML = "";
            // Agrega una opción por cada pregunta obtenida
            pregunta.forEach(function(pregunta) {
                var option = document.createElement('option');
                option.value = pregunta.idPregunta;
                option.textContent = pregunta.Pregunta;
                selectElement.appendChild(option);
            });
        } else {
            console.log('Hubo un error en la solicitud');
        }
    };
    xhr.onerror = function() {
        console.log('Hubo un error en la solicitud');
    };
    xhr.send();
}



function ModificarAjax() {

    var datos = $('#frminsertUsuario').serialize();


    $.ajax({
        type: 'POST',
        url: '',
        async: true,
        data: datos,
        success: function(data, response) {
            console.log("este es modificar Ajax");

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
                retornocampos();

                mostrarDatosUsuario();


                console.log($("#accion").val());
            }


        },



    });



}

function retornocampos() {
    // Mostrar los campos select y desbloquear el campo de cédula
    $('#grupo__privilegio').show();
    $('#IdUsuario').prop('readonly', false);
}

function eliminarDatos(IdUsuario) {

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
                console.log("id de Usuario : " + IdUsuario);
                // Hacer una petición AJAX para llamar al método eliminarDatos() del modelo
                $.ajax({
                    url: "",
                    type: "POST",
                    data: {
                        accion: "eliminar",
                        IdUsuario: IdUsuario
                    },
                    success: function(response) {

                        swal("¡Hecho!", response, "success");

                        console.log(response);
                        // Recargar la página o actualizar los datos en la vista
                        mostrarDatosUsuario();
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
    mostrarDatosUsuario();
    obtenerPregunta();
    /* console.log($("#accion").val()); */



    $("#incluir6").on("click", function(event) {
        event.preventDefault();
        console.log("insertar Usuario en la BD");
        enviarAjax();

    });







    function enviarAjax() {


        var datos = new FormData();
        datos.append('IdUsuario', $("#IdUsuario").val());
        datos.append('privilegio', $("#privilegio").val());
        datos.append('Usuario', $("#Usuario").val());
        datos.append('clave', $("#clave").val());
        datos.append('Seguridad_idPregunta', $("#Seguridad_idPregunta").val());
        datos.append('respuesta', $("#respuesta").val());
        datos.append('accion', $("#accion").val());


        for (const entry of datos) {
            console.log(entry[0] + ': ' + entry[1]);
        }

        console.log(datos); /* pa saber si tomó los datos */



        $.ajax({
            type: 'POST',
            url: '',
            async: true,
            processData: false,
            contentType: false,
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
                    mostrarDatosUsuario();
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