jQuery(document).ready(function ($) {
  function handleMiSaldoProveedorChange() {
      $('.miSaldoProveedor-item input[type="checkbox"]').not(this).prop('checked', false);
      $('.miSaldoProveedor-item').removeClass('selected');
      $(this).closest('.miSaldoProveedor-item').addClass('selected');
  }

  $('.miSaldoProveedor-item input[type="checkbox"]').change(handleMiSaldoProveedorChange);

  $('#confirmarBtn').on('click', function () {
      var selectedOption = $('.miSaldoProveedor-item.selected').find('input[type="checkbox"]').attr('id');
      console.log('Opción seleccionada:', selectedOption);
  });
});