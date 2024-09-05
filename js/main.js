jQuery(document).ready(function () {

    const swiper = new Swiper('#reviews', {
    slidesPerView: 1,
    spaceBetween: 25,
    allowTouchMove: true,
    centeredSlides: false,
    pagination: true,
    mousewheel: false,
    loop: false,
    // pagination: {
    //   el: ".swiper-pagination",
    //   clickable: true,
    // },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 3,
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
      },
    },
  });

  // Burger menu
  // var Menu = {
  //   el: {
  //     ham: jQuery(".menuburger"),
  //     menuTop: jQuery(".menu-top"),
  //     menuMiddle: jQuery(".menu-middle"),
  //     menuBottom: jQuery(".menu-bottom"),
  //   },

  //   init: function () {
  //     Menu.bindUIactions();
  //   },

  //   bindUIactions: function () {
  //     Menu.el.ham.on("click", function (event) {
  //       Menu.activateMenu(event);
  //       event.preventDefault();
  //     });
  //   },

  //   activateMenu: function () {
  //     Menu.el.menuTop.toggleClass("menu-top-click");
  //     Menu.el.menuMiddle.toggleClass("menu-middle-click");
  //     Menu.el.menuBottom.toggleClass("menu-bottom-click");
  //     jQuery(".menu-main ul").slideToggle(300);
  //   },
  // };
  // Menu.init();

  // Eye password
  // const togglePassword = document.querySelector("#togglePassword");
  // const password = document.querySelector("#password");

  // togglePassword.addEventListener("click", function (e) {
  //   // toggle the type attribute
  //   const type =
  //     password.getAttribute("type") === "password" ? "text" : "password";
  //   password.setAttribute("type", type);
  //   // toggle the eye slash icon
  //   this.classList.toggle("bi-eye-slash");
  // });
});

jQuery(document).ready(function($) {
    // Obtener la URL actual
    var currentUrl = window.location.href;

    // Verificar si la URL contiene "/es/" para identificar el idioma español
    var isSpanish = currentUrl.indexOf('/es/') !== -1;

    // Cambiar los textos según el idioma
    if (isSpanish) {
        // Cambiar textos a español
        // Traducción del botón "Agregar a galería"
        $('.acf-gallery-add').text('Agregar a galería');

        // Traducción de las opciones del select en español
        $('.acf-gallery-sort option[value=""]').text('Acciones en lote'); // Opción por defecto
        $('.acf-gallery-sort option[value="date"]').text('Ordenar por fecha de subida'); // Ordenar por fecha de subida
        $('.acf-gallery-sort option[value="modified"]').text('Ordenar por fecha de modificación'); // Ordenar por fecha de modificación
        $('.acf-gallery-sort option[value="title"]').text('Ordenar por título'); // Ordenar por título
        $('.acf-gallery-sort option[value="reverse"]').text('Invertir orden actual'); // Invertir orden actual

        // Traducción del botón "Agregar Fila"
        $('.acf-button.acf-repeater-add-row').text('Agregar Fila');
    } else {
        // Cambiar textos a catalán
        // Traducción del botón "Afegir fila!" (en catalán)
        $('.acf-gallery-add').text('Afegir fila!');

        // Traducción de las opciones del select en catalán
        $('.acf-gallery-sort option[value=""]').text('Accions per lots'); // Opción por defecto en catalán
        $('.acf-gallery-sort option[value="date"]').text('Ordenar per data de pujada'); // Ordenar por fecha de subida en catalán
        $('.acf-gallery-sort option[value="modified"]').text('Ordenar per data de modificació'); // Ordenar por fecha de modificación en catalán
        $('.acf-gallery-sort option[value="title"]').text('Ordenar per títol'); // Ordenar por título en catalán
        $('.acf-gallery-sort option[value="reverse"]').text('Invertir ordre actual'); // Invertir orden actual en catalán

        // Traducción del botón "Afegir Fila"
        $('.acf-button.acf-repeater-add-row').text('Afegir Fila');
    }
});
