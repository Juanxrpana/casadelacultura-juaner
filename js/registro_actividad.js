function mostrarDatosActividad() {
    console.log("entrando mostrando data Actividad");

    $.ajax({
        url: 'modelo/mostrarDatosActividad.php'

    }).done(function(r) {
        console.log("Mostrando data Actividad satisfactoriamente");
        $('#tablaDatosActividad').html(r);
    })
}

function modificarDatosActividad(id) {

    console.log("entrando a modificar datos Actividad con ajax");
    $('#ModalActividad1').html('');
    $('#ModalActividad1').html('Modificar Datos Actividad');
    $('#idActividad').prop({
        'readonly': true
    })
    $('#accion').val('modificar');
    console.log($("#accion").val());
    $('#idActividad').val(id);
    /* ModificarAjax(); */

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