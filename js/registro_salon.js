$(document).ready(function() {

    mostrarDatosSalon();

    $("#incluir").click(function(event) {
        /* Act on the event */

        console.log("dksoaskd");
        $('#ModalSalon1').html('');
        $('#ModalSalon1').html('Agregar nuevo salon');
        $('#accion').val('incluir');
        console.log($("#accion").val());
        $('#idSalon').prop({
            'readonly': false
        })
    });


});
//CONTROL DE BOTONES

function incluirsalon() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    };
    xhttp.open("POST", "./controlador/gestionsalon.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    var data = "idSalon=" + document.getElementById("idSalon").value +
        "&NombreSalon=" + document.getElementById("NombreSalon").value +
        "&CantidadPersonasSalon=" + document.getElementById("CantidadPersonasSalon").value +
        "&CantidadSillas=" + document.getElementById("CantidadSillas").value +
        "&accion=" + document.getElementById("accion").value;
    xhttp.send(data);
    return false;
}


$("#incluir").on("click", function() {

    console.log("Insertar1")
    var datos = new FormData();
    datos.append('accion', 'incluir');
    datos.append('idSalon', $("#idSalon").val());
    datos.append('NombreSalon', $("#NombreSalon").val());
    datos.append('CantidadPersonasSalon', $("#CantidadPersonasSalon").val());
    datos.append('CantidadSillas', $("#CantidadSillas").val());
    enviaAjax(datos, 'incluir');

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



//ajax pa no cargar d nuevo la pagina

function enviaAjax(datos, accion) {

    var dato = $('#frminsert').serialize();
    console.log(dato);

    $.ajax({


        async: true,
        url: './modelo/gestionsalon.php', //la pagina a donde se envia por estar en mvc, se omite la ruta ya que siempre estaremos en la misma pagina
        type: 'POST', //tipo de envio
        async: true,
        data: datos,
        success: function(respuesta) { //si resulto exitosa la transmision

            if (accion == 'consultar') {
                $("#resultadoconsulta").html(respuesta);
            } else if (accion == 'consultatr') {
                lee = JSON.parse(respuesta);

                console.log(lee['resultado']);
                if (lee['resultado'] == 'encontro') {
                    //habilita los botones para poder eliminar y modificar

                    botonOn();
                    $("#incluir").prop('disabled', true);
                    $("#NombreSalon").val(lee[0].NombreSalon);
                    $("#CantidadPersonasSalon").val(lee[0].CantidadPersonasSalon);
                    $("#CantidadSillas").val(lee[0].CantidadSillas);
                } else if (lee['resultado'] == 'noencontro') {

                } else {
                    muestraMensaje(lee['resultado']);
                }


            } else {

                limpia();
                botonOff();

                muestraMensaje(respuesta);
                $('#contenido').css('display', 'none');
                $('#tableajax').DataTable().ajax.reload();
                if (!$('#formulario').is(":visible")) {
                    $('#formulario').css('display', 'block');
                }

            }
        },
        error: function() {
            muestraMensaje("Error con ajax");
        }

    });

}

function mostrarDatosSalon() {
    console.log("1");

    $.ajax({
        url: 'modelo/mostrarDatosSalon.php'



    }).done(function(r) {
        console.log("3");
        $('#tablaDatosSalon').html(r);
    })
}