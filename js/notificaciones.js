$(document).ready(function() {
    $("#noti").click(function() {
        $("#notificacion").toggle(function() {
            $(this).toggleClass("desplazar");
        });
    });
});