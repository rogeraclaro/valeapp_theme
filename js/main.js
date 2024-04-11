jQuery(document).ready(function () {
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
  const togglePassword = document.querySelector("#togglePassword");
  const password = document.querySelector("#password");

  togglePassword.addEventListener("click", function (e) {
    // toggle the type attribute
    const type =
      password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    // toggle the eye slash icon
    this.classList.toggle("bi-eye-slash");
  });
});
