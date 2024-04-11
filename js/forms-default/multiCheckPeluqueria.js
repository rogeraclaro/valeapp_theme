jQuery(document).ready(function ($) {
    function updatePeluqueriaOptions() {
        selectedOptions = $('.peluqueria-item input:checked').not('[data-tipo="todos"]').map(function () {
            return $(this).data('tipo');
        }).get();
        let selectedCount = selectedOptions.length;
        $('#contador').text('Opciones seleccionadas: ' + selectedCount);
        $('#btnSubmit').prop('disabled', selectedCount === 0);
    }

    function selectAllPeluqueria() {
        let isChecked = $(this).prop('checked');
        $('.peluqueria-item input').prop('checked', isChecked).trigger('change');
    }

    function capturePeluqueriaOptions() {
        console.log('Opciones seleccionadas en la primera modal:', selectedOptions);
    }

    function updateGenderOptions() {
        $('#btnSubmitGender').prop('disabled', !$('.gender-item input:checked').length);
    }

    function captureSelectedGender() {
        let selectedGender = $('.gender-item input:checked').data('tipo');
        console.log('Género seleccionado en la segunda modal:', selectedGender);
    }

    let selectedOptions = [];

    // Habilitar o deshabilitar el botón de la primera modal según las selecciones
    $('.peluqueria-item input').on('change', updatePeluqueriaOptions);

    // Marcar todas las opciones al seleccionar "Todos"
    $('[data-peluqueria-selectAll="true"]').on('change', selectAllPeluqueria);

    // Capturar las opciones seleccionadas en la primera modal
    $('#btnSubmit').on('click', capturePeluqueriaOptions);

    // Habilitar o deshabilitar el botón de la segunda modal según las selecciones
    $('.gender-item input').on('change', updateGenderOptions);

    // Capturar el género seleccionado en la segunda modal
    $('#btnSubmitGender').on('click', captureSelectedGender);
});