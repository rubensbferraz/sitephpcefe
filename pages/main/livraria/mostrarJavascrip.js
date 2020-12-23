$(document).ready(function () {
    $('#select').on('change', function () {
        var selectValor = $(this).val();

        $('#mostraTipoObra').children('div').hide();
        $('#mostraTipoObra').children(selectValor).show();
    })
});