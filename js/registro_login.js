$(document).ready(function() {   

    //Seccion para mostrar lo enviado en el modal mensaje//

    //Función que verifica que exista algo dentro de un div
    //oculto y lo muestra por el modal
    if ($.trim($("#mensajes").text()) != "") {
        mensajemodal($("#mensajes").html());
    }


    $("#iniciar").on("click", function() {
        if (validarboton()) {
            $("#accion_inicio_sesion").val("usuario");
            $("#f").submit();
        }
    });


});

//console.log("aisdioj");


function mensajemodal(mensaje) {

    swal({
        title: "Alerta",
        text: mensaje,
        icon: "success",
        button: "Salir",
    });
}

function validarboton() {
    return true;
}