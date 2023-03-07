$(document).ready(function() {

    mostrarDatosSalon();

    /*   $("#incluir").click(function(event) {
         

          console.log("dksoaskd");
          $('#ModalSalon1').html('');
          $('#ModalSalon1').html('Agregar nuevo salon');
          $('#accion').val('incluir');
          console.log($("#accion").val());
          $('#idSalon').prop({
              'readonly': false
          })
      }); */



    //CONTROL DE BOTONES




    $("#incluir2").on("click", function(event) {
        event.preventDefault();

        console.log("Insertar1")
        var datos = new FormData();
        datos.append('accion', 'incluir');
        datos.append('idSalon', $("#idSalon").val());
        datos.append('NombreSalon', $("#NombreSalon").val());
        datos.append('CantidadPersonasSalon', $("#CantidadPersonasSalon").val());
        datos.append('CantidadSillas', $("#CantidadSillas").val());
        enviarAjax(dato);


    });

    function enviarAjax() {

        var datos = $('#frminsertsalon').serialize();
        console.log(datos); /* pa saber si tomó los datos */

        $.ajax({
            type: 'POST',
            url: '../modelo/gestionsalon.php',
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


    //ajax pa no cargar d nuevo la pagina
    /* function enviaAjax(datos, accion) {

        var dato = $('#frminsertsalon').serialize();
        $.ajax({
            async: true,
            url: '', //la pagina a donde se envia por estar en mvc, se omite la ruta ya que siempre estaremos en la misma pagina
            type: 'POST', //tipo de envio
            async: true,
            data: dato,
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

    } */

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