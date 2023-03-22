$(document).ready(function() {

    mostrar();

    $("#incluir").click(function(event) {
        /* Act on the event */

        console.log("dksoaskd");
        $('#insertarModal1').html('');
        $('#insertarModal1').html('Agregar nuevo registro');
        $('#accion').val('incluir');
        console.log($("#accion").val());
        $('#idDirectorSalon').prop({
            'readonly': false
        })
    });


});

function mostrar() {
    /* console.log("1"); */

    $.ajax({
        url: 'modelo/mostrarDatos.php'



    }).done(function(r) {
        /* console.log("3"); */
        $('#tablaDatos').html(r);
    })
}

function modificarDatos(id) {

    console.log("entrando a modificarDatos");
    $('#insertarModal1').html('');
    $('#insertarModal1').html('Modificar Datos');
    $('#idDirectorSalon').prop({
        'readonly': true
    })
    $('#accion').val('modificar');
    console.log($("#accion").val());
    $('#idDirectorSalon').val(id);
    $('#frminsert').attr('onsubmit', 'return a()');

}

function a() {
    var dato = $('#frminsert').serialize();
    console.log(dato); /* pa saber si tomó los datos */


    $.ajax({
        async: true,
        url: './modelo/insertarDatos.php',
        method: 'POST',
        data: dato,


        success: function(re) {
            console.log("entrando a success");
            /*   alert(re);
              console.log(re); */
            a = re;
            if (a === "positivo") {
                swal("Error", "No se ingreso correctamente", "error");
            } else {
                /* console.log("entrando al else"); */
                $('input').val(''); //limpiar el formulario para otro registro
                mostrar();
                /* alert("si se agrego correctamente: "); */
                swal("¡" + re + "!", ":D", "success");
            }
        }
    });
    /*  console.log("saliendo de la function"); */
    return false;

}

/* function eliminarDatos(id){

}*/

function insertarDatos(id) {
    console.log("entrando a insertar datos");
    var dato = $('#frminsert').serialize();
    console.log(dato); /* pa saber si tomó los datos */
    $.ajax({
        async: true,
        url: './modelo/insertarDatos.php',
        method: 'POST',
        data: dato,

        success: function(re) {
            console.log("entrando a success");
            /* alert(re); */
            console.log(re);
            a = re;
            if (a === "positivo") {
                swal("Error", "No se ingreso correctamente", "error");
            } else {
                /* console.log("entrando al else"); */
                $('#frminsert'); //limpiar el formulario para otro registro
                mostrar();
                /*  alert("si se agrego correctamente: "); */
                swal("¡" + re + "!", ":D", "success");
            }
        }
    });
    $('input').val('');
    console.log("saliendo de la function");
    return false;
}