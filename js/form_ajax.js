jQuery(document).ready(function ($) {
  // $('#form_providers').on('submit', function (e) {
  //   e.preventDefault();

  //   var data = {
  //     action: 'front_providers_save_metaboxes',
  //     form_data: $(this).serialize(),
  //   };

  //   $.post(ajax_object.ajax_url, data, function (response) {
  //     if (response.success) {
  //       alert('Datos registrados correctamente');
  //       $(location).attr('href', '/?page_id=100');
  //     } else {
  //       alert('Error al registrar los datos');
  //     }
  //   });
  // });

  // $('#form_providers_user').on('submit', function (e) {
  //   e.preventDefault();

  //   var data = {
  //     action: 'front_providers_save_metaboxes',
  //     form_data: $(this).serialize(),
  //   };

  //   $.post(ajax_object.ajax_url, data, function (response) {
  //     if (response.success) {
  //       alert('Datos registrados correctamente');
  //       $(location).attr('href', '/?page_id=100');
  //     } else {
  //       alert('Error al registrar los datos');
  //     }
  //   });
  // });

  $('#form_customer').on('submit', function (e) {
    e.preventDefault();

    var data = {
      action: 'front_customers_save_metaboxes',
      form_data: $(this).serialize(),
    };
    console.log("Hola");

    $.post(ajax_object.ajax_url, data, function (response) {
      if (response.success) {
        alert('Datos registrados correctamente');
        $(location).attr('href', '/inicio-sesion-cliente');
      } else {
        alert('Error al registrar los datos');
      }
    });
  });
});
