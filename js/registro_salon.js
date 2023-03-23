const formulario = document.getElementById('frminsertsalon');
const input = document.querySelectorAll('#frminsertsalon input');

const expresiones = {

    idSalon: /^[0-9\b-]*$/,
    NombreSalon: /^[A-Za-z0-9\b\s\u00f1\u00d1\u00E0-\u00FC]{0,30}$/,
    CantidadPersonasSalon: /^[0-9\b-]*$/,
    CantidadSillas: /^[0-9\b-]*$/,
    Nombredirector: /^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{0,30}$/,
    Nombredirector2: /^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{0,30}$/,
    Apellidodirector: /^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{0,30}$/,
    Apellidodirector2: /^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{0,30}$/,
}

const validarcampokeypress = (expresion, input, campo) => {
  const tecla = event.which || event.keyCode;
  const valor = input.value;

  // Si la tecla presionada es ENTER, no validamos nada
  if (tecla === 13) {
    return;
  }

  // Validamos que la tecla presionada sea un número o una letra, según corresponda
  const esNumero = expresion === expresiones.Participantes || expresion === expresiones.CantidadEncuentros || expresion === expresiones.Cedula || expresion === expresiones.Telefono || expresion === expresiones.CantidadPersonasSalon || expresion === expresiones.CantidadSillas || expresion === expresiones.idSalon || expresiones.NombreSalon;
 const esLetra = expresion === expresiones.Estatus || expresion === expresiones.NombreActividad || expresion === expresiones.Nombredirector || expresion === expresiones.Nombredirector2 || expresion === expresiones.Apellidodirector || expresion === expresiones.Apellidodirector2  || expresiones.NombreSalon;
 const esCaracterValido =
    (esNumero && ((tecla >= 48 && tecla <= 57) || tecla === 45)) ||
    (esLetra && ((tecla >= 65 && tecla <= 90) || (tecla >= 97 && tecla <= 122) || (tecla === 32))) ||
    tecla === 8;
  if (!esCaracterValido) {
    event.preventDefault();
    console.log("a1");
    //alert(`El campo ${campo} solo permite ingresar ${esNumero ? 'números' : 'letras'}`);
  } else {
    // Validamos que el valor ingresado cumpla con la expresión regular
    const regex = new RegExp(expresion);
    if (!regex.test(valor)) {
      // event.preventDefault();
      console.log("a2");
      input.value = valor.slice(0, -1); // Eliminamos el último carácter ingresado
      //alert(`El campo ${campo} solo permite ingresar ${esNumero ? 'números' : 'letras'}`);
    }
  }


    if (expresion.test(input.value)) {
        console.log("AA2");
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

function validarcampo(regex, campo, nombrecampo) {
    if (!regex.test(campo.val())) {

        //campo.css('background', 'red');
        $(`#grupo__${nombrecampo}`).addClass('formulario__grupo-incorrecto').removeClass('formulario__grupo-correcto');
        $(`#grupo__${nombrecampo} i`).addClass('fa-xmark').removeClass('fa-circle-check');
        $(`#grupo__${nombrecampo} .formulario__ipnut-error`).addClass('formulario__ipnut-error-activo');


        return false;
    } else {
        //   campo.css('background', 'white');
        $(`#grupo__${nombrecampo}`).removeClass('formulario__grupo-incorrecto').addClass('formulario__grupo-correcto');
        $(`#grupo__${nombrecampo} i`).removeClass('fa-xmark').addClass('fa-circle-check');
        $(`#grupo__${nombrecampo} .formulario__ipnut-error`).removeClass('formulario__ipnut-error-activo');

        return true;
    }
}

const validarform = (e) => {
    /* console.log("validando"); */
    switch (e.target.name) {

        case "idSalon":
            validarcampokeypress(expresiones.idSalon, e.target, 'idsalon');

            break;

        case "NombreSalon":

            validarcampokeypress(expresiones.NombreSalon, e.target, 'NombreSalon');

            break;
        case "CantidadPersonasSalon":

            validarcampokeypress(expresiones.CantidadPersonasSalon, e.target, 'CantidadPersonasSalon');


            break;
        case "CantidadSillas":

            validarcampokeypress(expresiones.CantidadSillas, e.target, 'CantidadSillas');

            break;
        case "Nombredirector":

            validarcampokeypress(expresiones.Nombredirector, e.target, 'Nombredirector');

            break;
        case "Nombredirector2":

            validarcampokeypress(expresiones.Nombredirector2, e.target, 'Nombredirector2');

            break;
        case "Apellidodirector":

            validarcampokeypress(expresiones.Apellidodirector, e.target, 'Apellidodirector');

            break;
        case "Apellidodirector2":

            validarcampokeypress(expresiones.Apellidodirector2, e.target, 'Apellidodirector2');

            break;




    }

}
function validarenvio() {
    if (validarcampo(/^[0-9\b-]{1,5}$/, $("#idSalon"), "idSalon") === false) {
        solicituderror();
        console.log("12");
        return false;
    } else if (validarcampo(/^[A-Za-z0-9\b\s\u00f1\u00d1\u00E0-\u00FC]{2,30}$/, $("#NombreSalon"), "NombreSalon") === false) {
        solicituderror();
        console.log("13");
        return false;
    } else if (validarcampo(/^[0-9\b-]{1,5}$/, $("#CantidadPersonasSalon"), "CantidadPersonasSalon") === false) {
        solicituderror("Participantes <br/>SOLO NUMEROS ENTEROS");
        return false;
    } else if (validarcampo(/^[0-9\b-]{1,5}$/, $("#CantidadSillas"), "CantidadSillas") === false) {
        solicituderror("Participantes <br/>SOLO NUMEROS ENTEROS");
        return false;
    } else if (validarcampo(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{2,30}$/, $("#Nombredirector"), "Nombredirector") === false) {
        solicituderror("Participantes <br/>SOLO NUMEROS ENTEROS");
        return false;
    } else if (validarcampo(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{2,30}$/, $("#Nombredirector2"), "Nombredirector2") === false) {
        solicituderror("Participantes <br/>SOLO NUMEROS ENTEROS");
        return false;
    } else if (validarcampo(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{2,30}$/, $("#Apellidodirector"), "Apellidodirector") === false) {
        solicituderror("Participantes <br/>SOLO NUMEROS ENTEROS");
        return false;
    } else if (validarcampo(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{2,30}$/, $("#Apellidodirector2"), "Apellidodirector2") === false) {
        solicituderror("Participantes <br/>SOLO NUMEROS ENTEROS");
        return false;
    }  else {
        return true;
    }

}

function solicituderror(a) {
    console.log();
    console.log("algo salio mal papu, verifica los campos ingresados");
    Swal.fire({
        title: a,
        text: 'Por favor, revise los campos ingresados',
        icon: 'warning',
        confirmButtonText: 'Aceptar'
    });
}



input.forEach((input) => {
    input.addEventListener('keydown', validarform);
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
         if (validarenvio()) {
            console.log(validarenvio());
            /* alert("enviando a ajax, esta comentado en linea 570"); */
        enviarAjax();
            
        } else {
            console.log("el campo")
            solicituderror();
        }

    });



function solicituderror(a) {
    console.log();
    console.log("algo salio mal papu, verifica los campos ingresados");
    Swal.fire({
        title: a,
        text: 'Por favor, revise los campos ingresados',
        icon: 'warning',
        confirmButtonText: 'Aceptar'
    });
}


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