function mostrar(){
    $.ajax({
        type:'POST',url:'./modelo/mostrarDatos.php',succes:function(r){
            $('#tablaDatos').html(r);
        }
    });
}

function modificarDatos(id){

}

function eliminarDatos(id){

}