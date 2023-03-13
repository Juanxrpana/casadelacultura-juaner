function mostrarDatosSalon() {
    console.log("entrando mostrando data salon");

    $.ajax({
        url: 'modelo/mostrarDatosSalon.php'

    }).done(function(r) {
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


    /* console.log("entrando a eliminar datos con ajax");
     console.log("id de salon : "+idSalon);
     // Hacer una petición AJAX para llamar al método eliminarDatos() del modelo
     $.ajax({
         url: "",
         type: "POST",
         data: { accion: "eliminar",
             idSalon: idSalon },
         success: function(response) {

             swal("¡Hecho!",response,"success");

             console.log(response);
             // Recargar la página o actualizar los datos en la vista
             mostrarDatosSalon();
         },
         error: function(xhr, status, error) {
             swal("Advertencia","Ha ocurrido un error al eliminar el salón.", "warning");
         }
       });*/












}




$(document).ready(function() {

    //primer mostrar tabla
    mostrarDatosSalon();
    console.log($("#accion").val());



    $("#incluir2").on("click", function(event) {
        event.preventDefault();
        console.log("insertar salon en la BD");
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