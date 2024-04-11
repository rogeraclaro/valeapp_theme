jQuery(document).ready(function ($) {
  $(".cards-item .contentButton button").on('click', function () {
    var id_provider = $(this).data("id");
    var btnId = 'btn_' + id_provider;

    if ($('#' + btnId).length > 0) {
      var id_publish = datos_php.publish;
      var id_request = datos_php.request;

      $.ajax({
        type: 'POST',
        url: ajax_object.ajax_url,
        data: {
          action: 'send_email_user',
          providerID: id_provider,
          publishID: id_publish,
          requestID: id_request,
        },
        success: function (response) {
          alert(response);
        },
        error: function (error) {
          console.error("Error en la solicitud AJAX", error);
        }
      });
    } else { alert("Me quede segundo") }
  });


  //HECHO HECHO
  // $(".cards-item .contentButton button").on('click', function () {
  //   var id = $(this).data("id");
  //   alert(id);
  // });

  // $('#mi_boton').on('click', function () {
  //   // alert('Se le ha notificado al Profesional por correo, pronto se contactara contigo!');
  //   var id_provider = datos_php.provider;
  //   var id_publish = datos_php.publish;
  //   var id_request = datos_php.request;

  //   $.ajax({
  //     type: 'POST',
  //     url: ajax_object.ajax_url,
  //     data: {
  //       action: 'send_email_user',
  //       providerID: id_provider,
  //       publishID: id_publish,
  //       requestID: id_request,
  //     },
  //     success: function (response) {
  //       alert(response);
  //     },
  //     error: function (error) {
  //       console.error("Error en la solicitud AJAX", error);
  //     }
  //   })
  // });
});
