$(document).ready(function() {
    $('#report-form').on('submit', function(e) {
        e.preventDefault();
        var representante = $('#representante').val();
        $.ajax({
            type: 'POST',
            url: './modelo/buscar.php',
            data: { representante: representante },
            success: function(response) {
                // Mostrar los resultados en una tabla
                $('#reporte-tabla').html(response);
            }
        });
    });
    // Configurar el autocompletado
    $('#representante').autocomplete({
        source: 'autocompletar.php'
    });
});