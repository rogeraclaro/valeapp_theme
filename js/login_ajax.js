jQuery(document).ready(function ($) {
  $('#login-providers').on('submit', function (e) {
    e.preventDefault();

    var data = {
      action: 'login_providers',
      login_data: $(this).serialize(),
    };

    $.post(ajax_object.ajax_url, data, function (response) {
      if (response.success) {
        alert('Inicio de sesión satisfactorio.');
        $(location).attr('href', '/home');
      } else {
        alert('Error al iniciar sesión.');
      }
    });
  });

  $('#login-customers').on('submit', function (e) {
    e.preventDefault();

    var data = {
      action: 'login_customers',
      login_data: $(this).serialize(),
    };

    $.post(ajax_object.ajax_url, data, function (response) {
      if (response.success) {
        alert('Inicio de sesión satisfactorio.');
        $(location).attr('href', '/home');
      } else {
        alert('Error al iniciar sesión.');
      }
    });
  });

});
