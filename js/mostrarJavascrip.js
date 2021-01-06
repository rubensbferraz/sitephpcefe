$(document).ready(function () {
    $('#mostraTipoobra').on('change', function () {
        var selectValor = '#' + $(this).val();

        $('#mostrar').children('div').hide();
        $('#mostrar').children(selectValor).show();
    });
});