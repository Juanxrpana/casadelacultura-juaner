const formulario = document.getElementById('frminsertActividad');
const input = document.querySelectorAll('#body input');
const inputRespo = document.querySelectorAll('#frminsertResponsable input');

let camposValidos = true;

const expresiones = {
    Estatus: /^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{0,10}$/,
    NombreActividad: /^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{0,30}$/,
    FechaActividad: /^\d{4}([\-/.])(0?[1-9]|1[1-2])\1(3[01]|[12][0-9]|0?[1-9])$/,
    Participantes: /^[0-9\b-]*$/,
    CantidadEncuentros: /^[0-9\b-]*$/,
    HoraInicio: /^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$/,
    HoraCierre: /^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$/,
    Cedula: /^[0-9]{0,10}$/,
    Telefono: /^[0-9\b-]{0,12}$/
}

const validarform = (e) => {
    /* console.log("validando"); */
    console.log(e.target.name);
    switch (e.target.name) {

        case "Estatus":
            validarcampokeypress(expresiones.Estatus, e.target, 'Estatus');

            break;

        case "NombreActividad":

            validarcampokeypress(expresiones.NombreActividad, e.target, 'NombreActividad');
           
            console.log(camposValidos);
            break;
    
        case "Participantes":

            validarcampokeypress(expresiones.Participantes, e.target, 'Participantes');
           
            console.log(camposValidos);

            break;
        case "CantidadEncuentros":

            validarcampokeypress(expresiones.CantidadEncuentros, e.target, 'CantidadEncuentros');
           
            console.log(camposValidos);

            break;

        case "Rid":

            validarcampokeypress(expresiones.Cedula, e.target, e.target.name);
           
            console.log(camposValidos);

            break;

        case "idNacionalidad":

            validarcampokeypress(expresiones.Cedula, e.target, e.target.name);
           
            console.log(camposValidos);

            break;

        case "Nombre1":

            validarcampokeypress(expresiones.NombreActividad, e.target, e.target.name);
           
            console.log(camposValidos);

            break;

        case "Nombre2":

            validarcampokeypress(expresiones.NombreActividad, e.target, e.target.name);
           
            console.log(camposValidos);

            break;

        case "Apellido1":

            validarcampokeypress(expresiones.NombreActividad, e.target, e.target.name);
           
            console.log(camposValidos);

            break;

        case "Apellido2":

            validarcampokeypress(expresiones.NombreActividad, e.target, e.target.name);
           
            console.log(camposValidos);

            break;

        case "Telefono":

            validarcampokeypress(expresiones.Telefono, e.target, e.target.name);
           
            console.log(camposValidos);

            break;
        
        
    }

}



input.forEach((input) => {
  input.addEventListener('keydown', validarform);
  input.addEventListener('blur', validarform);
});




const validarcampokeypress = (expresion, input, campo) => {

    const tecla = event.which || event.keyCode;
  const valor = input.value;

  // Si la tecla presionada es ENTER, no validamos nada
  if (tecla === 13) {
    return;
  }



  // Validamos que la tecla presionada sea un número o una letra, según corresponda
 const esNumero = expresion === expresiones.Participantes || expresion === expresiones.CantidadEncuentros || expresion === expresiones.Cedula || expresion === expresiones.Telefono;
  const esLetra = expresion === expresiones.Estatus || expresion === expresiones.NombreActividad;
  const esCaracterValido = (esNumero && ((tecla >= 48 && tecla <= 57) || tecla === 45)) || 
    (esLetra && ((tecla >= 65 && tecla <= 90) || (tecla >= 97 && tecla <= 122) || (tecla === 32))) || 
    tecla === 8;
  if (!esCaracterValido) {
    event.preventDefault();
    console.log("a1");
    //alert(`El campo ${campo} solo permite ingresar ${esNumero ? 'números' : 'letras'}`);
    }
  // Validamos que el valor ingresado cumpla con la expresión regular
  else {
    const regex = new RegExp(expresion);
    if (!regex.test(valor)) {
     // event.preventDefault();
       console.log("a2");
   input.value = valor.slice(0, -1); // Eliminamos el último carácter ingresado
      //alert(`El campo ${campo} solo permite ingresar ${esNumero ? 'números' : 'letras'}`);
    }
  }
  

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


function validarcampo(regex, campo, nombrecampo){
    if(!regex.test(campo.val())){

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


function validarenvio(){
    if(validarcampo(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,50}$/, $("#NombreActividad"), "NombreActividad") === false){
        solicituderror('Nombre de la actividad <br/>SOLO LETRAS ENTRE 3 Y 50 CARACTERES');
        console.log("12");
        return false;
    }
    else if(validarcampo(/^\d{4}([\-/.])(0?[1-9]|1[1-2])\1(3[01]|[12][0-9]|0?[1-9])$/, $("#FechaActividad"), "FechaActividad") === false){
        solicituderror("Fecha de la actividad <br/>FORMATO MM/DD/YYYY");
       console.log("13");
       return false;
    }
    else if(validarcampo(/^[0-9]+$/, $("#Participantes"), "Participantes") === false){
        solicituderror("Participantes <br/>SOLO NUMEROS ENTEROS");
        return false;
    }
    else if(validarcampo(/^[0-9]+$/, $("#CantidadEncuentros"), "CantidadEncuentros") === false){
        solicituderror("Cantidad de encuentros <br/>SOLO NUMEROS ENTEROS");
        return false;
    }
    else if(validarcampo(/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/, $("#HoraInicio"), "HoraInicio") === false){
        solicituderror("Hora de inicio <br/>FORMATO HH:MM");
        return false;
    }
    else if(validarcampo(/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/, $("#HoraCierre"), "HoraCierre") === false){
        solicituderror("Hora de cierre <br/>FORMATO HH:MM");
        return false;
    }
    else if(validarcampo(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/, $("#Estatus"), "Estatus") === false){
        solicituderror("Estatus <br/>SOLO LETRAS ENTRE 3 Y 30 CARACTERES");
        console.log("1");
        return false;
    }
    else {
        return true;
    }

}

function selec(argument) {

    if(argument.val() == null) {
            argument.css({
                'background-color': '#f8d7da',
                'border-color': '#f5c6cb'
            });
            return true;
            

        } else {
           argument.css({
                'background-color': '#ffffff',
                'border-color': '#ffffff'
            });
           return false;
        }
    // body...
}


function validarenviorepre(){
    if(validarcampo(/^[0-9\b-]{7,10}$/, $("#Rid"), "Rid") === false){
        solicituderror("Cedula <br/>SOLO NUMEROS DE 7 O 8 DIGITOS");
        console.log("13");
        return false;
    }
    else if(selec($("#idNacionalidad"))){

       
        solicituderror("Nacionalidad del Responsable <br/>DEBE SELECCIONAR UNA OPCION");
        return false;
    }
    else if(validarcampo(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,50}$/, $("#Nombre1"), "Nombre1") === false){
        solicituderror('Nombre <br/>SOLO LETRAS ENTRE 3 Y 50 CARACTERES');
        console.log("12");
        return false;
    }
    else if(validarcampo(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,50}$/, $("#Nombre2"), "Nombre2") === false){
        solicituderror('Nombre <br/>SOLO LETRAS ENTRE 3 Y 50 CARACTERES');
        console.log("12");
        return false;
    }
    else if(validarcampo(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,50}$/, $("#Apellido1"), "Apellido1") === false){
        solicituderror('Apellido <br/>SOLO LETRAS ENTRE 3 Y 50 CARACTERES');
        console.log("12");
        return false;
    }
    else if(validarcampo(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,50}$/, $("#Apellido2"), "Apellido2") === false){
        solicituderror('Apellido <br/>SOLO LETRAS ENTRE 3 Y 50 CARACTERES');
        console.log("12");
        return false;
    }
    else if(validarcampo(/^[0-9\b-]{10,12}$/, $("#Telefono"), "Telefono") === false){
        solicituderror("Telefono <br/>FORMATO 0423-1234567 o 0412-1234567");
        return false;
    }

    else {
        return true;
    }
}



formulario.addEventListener('click', (e) => {
    e.preventDefault();
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

    $("#idNacionalidad").on('change', function(event) {
        $("#idNacionalidad").css({
            'background-color': '#ffffff',
                'border-color': '#ffffff'
        });
    });


    // aquí trato d enviar x ajax
    $("#incluir3").on("click", function(event) {
        event.preventDefault();
        if (validarenvio()) {
            console.log(validarenvio());
            alert("enviando a ajax, esta comentado en linea 632");
            //enviarActividadAjax();
        } else {
            console.log("el campo")
            solicituderror();
        }
    });

    // aquí trato d enviar x ajax responsables
    $("#incluir4").on("click", function(event) {
        event.preventDefault();
        if (validarenviorepre()) {
            console.log(validarenviorepre());
            console.log("responsabel");
             alert("enviando a ajax, esta comentado en linea 646");
            // enviarResponsableAjax();
        } else {
            console.log("el campo")
            solicituderror();
        }
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