(function ($) {
  ("use strict");

  var CONFIGURATION = {
    market:
      window.location.host === "es.privalia.com" ||
        window.location.host === "it.privalia.com" ||
        window.location.host === "mutagency.com"
        ? "pv"
        : "vp",
    lang: document.documentElement.lang.split("-")[0],
    copyClipboard: {},
    goto: {},
    sticky: {},
    focus: {},
    video: {},
    carrousel: {
      cards: {
        slidesPerView: 1,
        spaceBetween: 25,
        allowTouchMove: true,
        centeredSlides: true,
        pagination: true,
        mousewheel: false,
        loop: false,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      },
      reviews: {
        slidesPerView: 1,
        spaceBetween: 25,
        allowTouchMove: true,
        centeredSlides: false,
        pagination: true,
        mousewheel: false,
        loop: false,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      },
      gallery: {
        slidesPerView: 1,
        spaceBetween: 25,
        allowTouchMove: true,
        centeredSlides: true,
        pagination: true,
        mousewheel: false,
        loop: false,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      },
    },
    countdown: {
      deadline: "May 20, 2022 6:59:59",
    },
    form: {
      url: "#",
      fields: {
        // 	phoneNumber: document.getElementById('phoneNumber').value,
        // 	language: _country,
        // 	email: 'test@gmail.com',
        // 	optinCondition: document.getElementById('optinCondition').checked,
      },
    },
  };

  var aosInit = () => {
    // AOS
    AOS.init({
      duration: 1500,
      once: true,
    });
  };

  // VIEWPORT
  // $(window).scroll(function () {
  //   if ($(".section4").is(":in-viewport")) {
  //     $(".sarten-ani").addClass("active");
  //   } else {
  //     $(".sarten-ani").removeClass("active");
  //   }
  //   if ($(".section4 .wrapper").is(":in-viewport")) {
  //     $(".section4 .subtitle").addClass("active");
  //   } else {
  //     $(".section4 .subtitle").removeClass("active");
  //   }
  // });

  function debounce(func, delay) {
    let timeoutID;
    return function () {
      clearTimeout(timeoutID);
      timeoutID = setTimeout(func, delay);
    };
  }

  $(window).scroll(
    debounce(function () {
      if ($(".section4").is(":in-viewport")) {
        $(".sarten-ani").addClass("active");
      } else {
        $(".sarten-ani").removeClass("active");
      }
      // if ($(".section4 .wrapper").is(":in-viewport")) {
      //   $(".section4 .subtitle").addClass("active");
      // } else {
      //   $(".section4 .subtitle").removeClass("active");
      // }
    }, 250)
  );

  /**
   * @class
   * @description Crea todos los eventos necesarios para el botón de copiar código.
   */
  class CopyClipboard {
    /**
     *
     * @param		{domElement}		wrapper					- Es el elemento que contiene toda la estructura HTML
     * @param		{Object}			config					- Configuración a customizada. Puede contener:
     * 	@property	{String}			[config.market=vp|pv]	- Indica si es Privalia o Veepee.
     * 	@property	{String}			config.lang				- Indica el idioma.
     * 	@property	{?(String|Object)}	config.code				- Indida el código. No es obligatorio.
     * 	@property	{String}			config.code.pv			- Código para Privalia
     * 	@property	{String}			config.code.vp			- Código para Veepee
     */
    constructor(wrapper, config) {
      this.config = config;
      this.code = "";
      this.market = config.market;
      this.lang = config.lang;
      this.messages = {
        de: {
          default: "Zum Kopieren des Codes klicken",
          copied: "Code kopiert",
        },
        es: {
          default: "Haz clic para copiar el código",
          copied: "Código copiado",
        },
        it: {
          default: "Clicca qui per copiare il codice",
          copied: "Codice copiato",
        },
        fr: {
          default: "Cliquez pour copier le code",
          copied: "Code copié",
        },
        nl: {
          default: "Klik om de code te kopiëren",
          copied: "Code gekopieerd",
        },
      };

      this.dom_wrapper = wrapper;
      this.dom_btn = wrapper.querySelector(".btn");
      this.dom_helper = wrapper.querySelector(".copy-helper");
      this.dom_icon = wrapper.querySelector(".copy-icon");
      this.dom_iconOk = wrapper.querySelector(".copy-icon-ok");

      this.init();
    }

    init() {
      this.updateCode();
      this.updateMessages();
      this.setEvents();
    }

    /**
     * @description Actualiza el código en todas las apariciones de la landing.
     * Si el botón tiene "data-clipboard" lo prioriza por encima del código de la configuración.
     */
    updateCode() {
      var code;
      var data_clipboard = this.dom_btn.dataset.clipboard;

      if (data_clipboard) {
        this.code = data_clipboard;
      } else {
        code = this.config.code;

        if (typeof code === "object") {
          this.code = code[this.market];
        } else {
          this.code = code;
        }
      }

      this.dom_btn.dataset.clipboard = this.code;
      document.querySelectorAll(".promocode").forEach((element) => {
        element.innerHTML = this.code;
      });
    }

    /**
     * @description Actualiza los mensajes según el idioma.
     * @param {String} msg - Indica el mensaje que se cogerá de this.messages
     */
    updateMessages(msg = "default") {
      this.dom_helper.innerHTML = this.messages[this.lang][msg];
    }

    /**
     * @description Copia el código en el portapapeles.
     * Una vez copiado cambia el icono y muestra un mensaje.
     */
    clickButton() {
      navigator.clipboard.writeText(this.code);

      this.dom_icon.style.display = "none";
      this.dom_iconOk.style.display = "block";

      this.updateMessages("copied");
    }

    setEvents() {
      this.dom_btn.addEventListener("click", () => {
        this.clickButton();
      });
    }
  }

  /**
   * @class
   * @description Crea los eventos para mover el scroll de a un punto concreto.
   * Los parámetros se pasan mediante atributos data que añadiremos al elemento que ejecutara la función:
   * 	- data-goto:			elemento que ejecuta la función.
   * 	- data-goto-closest:	elemento padre des de el que también se podrá ejecutar.
   * 	- data-goto-prevent:	elemento padre des de el que no se podrá ejecutar.
   * 	- data-goto-offset:		Pixeles (positivos o negativos) extras que queremos añadir o quitar.
   */
  class Goto {
    /**
     *
     * @param	{domElement}	element				- Es el elemento del DOM des de el que ejecutaremos la función.
     * @param	{Object}		config				- Por el momento no es necesario añadir configuración extra.
     *
     * @const	{domElement}	this.element
     * @const	{domElement}	this.destination	- Elemento del DOM al que nos dirigiremos. data-goto
     * @const	{?domElement}	this.closest		- Elemento padre del DOM des de el que podemos ejecutar la función. data-goto-closest
     * @const	{?domElement}	this.prevent		- Elemento padre del DOM des de el que no podemos ejecutar la función. data-goto-prevent
     * @const	{?Number}		this.offset			- Pixeles extras a añadir o quitar. data-goto-offset
     */
    constructor(element, config) {
      this.element = element;
      this.destination = document.querySelector(element.dataset.goto);
      this.closest = element.dataset.gotoClosest
        ? element.closest(element.dataset.gotoClosest)
        : undefined;
      this.prevent = element.dataset.gotoPrevent;
      this.offset = parseInt(element.dataset.gotoOffset, 10);

      this.init();
    }

    init() {
      this.setEvents();
    }

    /**
     * @description Mueve el scroll.
     */
    scroll() {
      var offset = !Number.isNaN(this.offset) ? this.offset : 0;

      window.scrollTo({
        top: this.destination.offsetTop + offset,
        behavior: "smooth",
      });
    }

    setEvents() {
      this.element.addEventListener("click", () => {
        this.scroll();
      });

      if (this.closest) {
        this.closest.addEventListener("click", (event) => {
          if (this.prevent) {
            if (event.target.closest(this.prevent) === null) this.scroll();
          } else {
            this.scroll();
          }
        });
      }
    }
  }

  /**
   * @class
   * @description Controla cuando se muestra y se esconde el CTA sticky
   * Se pueden pasar los siguientes parámetros mediante atributos data:
   * 	- data-sticky-disappear: Elemento del DOM que marcara a partir de cuando se esconde.
   */
  class Sticky {
    /**
     *
     * @param		{domElement}	element			- Elemento del DOM que contiene la Sticky
     * @param		{?Object}		config			- Configuración extra
     * 	@property	{Number}		config.showAt	- Determina a partir de que pixel se muestra
     *
     * @const		{domElement}	this.element	- Elemento del DOM que contiene la Sticky
     * @const		{Number}		this.showAt		- Determina a partir de que pixel se muestra. Por defecto es 100.
     */
    constructor(element, config) {
      this.element = element;
      this.showAt = config && config.showAt ? config.showAt : 100;

      this.init();
    }

    init() {
      this.viewport = this.element.dataset.stickyDisappear
        ? document.querySelector(this.element.dataset.stickyDisappear)
        : undefined;

      this.showAndHide();
      this.setEvents();
    }

    /**
     * @description Controla cuando se muestra y cuando se esconde la Sticky.
     */
    showAndHide() {
      var isInViewport = () => {
        return window.scrollY >= this.viewport.offsetTop;
      };

      if (window.scrollY > this.showAt) {
        if (this.viewport && isInViewport()) {
          $(this.element).slideUp();
        } else {
          $(this.element).slideDown();
        }
      } else {
        $(this.element).slideUp();
      }
    }

    setEvents() {
      window.addEventListener("scroll", () => {
        this.showAndHide();
      });
    }
  }

  /**
   * @class
   * @description Pone el focus del cursor donde se le indica.
   * Se pueden pasar los siguientes parámetros mediante atributos data:
   * 	- data-focus: Elemento del DOM donde se hará focus.
   */
  class Focus {
    /**
     *
     * @param {domElement} element - Elemento del DOM des de el que se ejecutará la función.
     */
    constructor(element) {
      this.element = element;
      this.destination;

      this.init();
    }

    init() {
      this.checkDirection();

      this.setEvents();
    }

    /**
     * @description Comprueba que el elemento sobre el que se va ha hacer focus sea un Input. Si no lo és, se busca el primero del formulario.
     */
    checkDirection() {
      var destination = document.querySelector(this.element.dataset.focus);

      if (destination.nodeName.toLowerCase() === "form") {
        this.destination = destination.querySelector("input");
      } else {
        this.destination = destination;
      }
    }

    setEvents() {
      this.element.addEventListener("click", () => {
        this.destination.focus();
      });
    }
  }

  /**
   * @class
   * @description Carga los Videos.
   * Se pueden pasar los siguientes parámetros mediante atributos:
   * 	- srcmob:	src del video optimizado para móvil.
   * 	- srcdesk:	src del video optimizado para Desktop.
   */
  class Video {
    constructor(video) {
      this.video = video;
      this.srcMob = video.getAttribute("srcmob");
      this.srcDesk = video.getAttribute("srcdesk");

      this.init();
    }

    init() {
      this.updateSource();
    }

    /**
     * @description Carga el video según si se trata de Movil o de Desktop
     */
    updateSource() {
      var src = window.screen.width < 768 ? this.srcMob : this.srcDesk;
      this.video.innerHTML = "";
      this.video.innerHTML = '<source type="video/mp4" src="' + src + '" />';
    }
  }

  /**
   * @class
   * @requires Swiper.js
   * @tutorial https://swiperjs.com/swiper-api
   * @description Carga el Carrousel mediante el plugin Swiper.
   */
  class Carrousel {
    /**
     *
     * @param		{domElement}	element					- Elemento del DOM que envuelve el Carrousel
     * @param		{Object}		config					- Configuración personalizada.
     * 	@property	{function}		config.slideChange		- Función que se ejecuta después de cada Slide
     * 	@property	{array}			config.customFunctions	- Array de funciones personalizadas
     */
    constructor(element, config) {
      /**
       * @const 		{Object}	configuration			- Configuración que utilizaremos por defecto.
       * @const 		{Object}	this.swiper				- Contenedor del objeto Swiper.
       * @const 		{Object}	this.events				- Contenedor de posibles eventos personalizados.
       *  @property	{function}	config.slideChange		- Función que se ejecuta después de cada Slide. Hay que extraerlo de config.
       * 	@property	{array}		config.customFunctions	- Array de funciones personalizadas. Hay que extraerlo de config.
       * @const 		{element}	this.element			- Elemento del DOM que envuelve el Carrousel.
       * @const 		{Object}	this.config				- Mix de todas las posibles configuraciones: default + personalizada.
       */
      var configuration = {
        slidesPerView: 1,
        spaceBetween: 50,
        slidesPerGroup: 1,
        centeredSlides: true,
        allowTouchMove: true,
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        mousewheel: true,
        breakpoints: {
          768: {
            slidesPerView: 3,
            spaceBetween: 30,
            centeredSlides: true,
            mousewheel: true,
            loop: true,
          },
        },
      };

      this.swiper;
      this.events = {};
      this.element = element;

      if (config) {
        if (config.slideChange) {
          this.events.slideChange = config.slideChange;
          delete config.slideChange;
        }
        if (config.customFunctions) {
          this.events.customFunctions = config.customFunctions;
          delete config.customFunctions;
        }
      }

      this.config = { ...configuration, ...config };

      this.init();
    }

    init() {
      this.initCarrousel();

      this.setEvents();
    }

    initCarrousel() {
      this.swiper = new Swiper(this.element, this.config);
    }

    setEvents() {
      if (this.events.slideChange) {
        this.swiper.on("slideChange", (event) => {
          this.events.slideChange(event);
        });
      }

      if (this.events.customFunctions) {
        this.events.customFunctions.forEach((fun) => {
          fun(this.swiper);
        });
      }
    }
  }

  /**
   * @class
   * @description Controla el modulo de cuenta atrás.
   */
  class Countdown {
    /**
     *
     * @param 		{domElement}	element			- Elemento del Dom que envuelve la estructura HTML
     * @param 		{Objet}			config			- Objeto con la configuración necesaria.
     *  @property	{String}		config.lang		- Idioma para los mensajes.
     *	@property	{String}		config.deadline	- Fecha y hora en la que finalizara la cuenta atrás
     */
    constructor(element, config) {
      this.element = element;
      this.lang = config.lang;
      this.deadline = new Date(config.deadline).getTime();
      this.messages = {
        de: {
          hours: "Stunden",
          minutes: "Minuten",
          seconds: "Sekunden",
          finalized: "Außerhalb der Zeit",
        },
        es: {
          hours: "Horas",
          minutes: "Minutos",
          seconds: "Segundos",
          finalized: "Fuera de tiempo",
        },
        it: {
          hours: "Ore",
          minutes: "Minuti",
          seconds: "Secondi",
          finalized: "Fuori tempo",
        },
        fr: {
          hours: "Heures",
          minutes: "Minutes",
          seconds: "Secondes",
          finalized: "Hors du temps",
        },
        nl: {
          hours: "Uren",
          minutes: "Minuten",
          seconds: "Seconden",
          finalized: "Geen tijd meer",
        },
      };

      this.init();
    }

    init() {
      this.buildStructure();
      this.setEvents();
    }

    /**
     * @description Construye la estructura HTML
     */
    buildStructure() {
      var timer = document.createElement("div");
      var digit = document.createElement("div");
      var digit2, digit3;
      var hours = document.createElement("div");
      var minutes = document.createElement("div");
      var seconds = document.createElement("div");
      var name = document.createElement("div");
      var name2, name3;
      var points = document.createElement("div");

      timer.classList.add("countdown-timer");
      digit.classList.add("countdown-digit");
      hours.classList.add("countdown-hours");
      minutes.classList.add("countdown-minutes");
      seconds.classList.add("countdown-seconds");
      points.classList.add("countdown-points");
      name.classList.add("countdown-name");
      points.innerHTML = ":";

      name.innerHTML = this.messages[this.lang]["hours"];
      name2 = name.cloneNode(false);
      name2.innerHTML = this.messages[this.lang]["minutes"];
      name3 = name.cloneNode(false);
      name3.innerHTML = this.messages[this.lang]["seconds"];

      digit2 = digit.cloneNode(false);
      digit3 = digit.cloneNode(false);

      digit.append(hours, name);
      digit2.append(minutes, name2);
      digit3.append(seconds, name3);
      timer.append(digit, points.cloneNode(true), digit2, points, digit3);

      this.element.appendChild(timer);
    }

    setEvents() {
      var deadline = new Date(this.deadline).getTime();

      // Update the count down every 1 second
      var interval = setInterval(() => {
        // Get today's date and time
        var now = new Date().getTime();

        // Find the duration between now and the count down date
        var duration = deadline - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(duration / (1000 * 60 * 60 * 24));
        var hours =
          Math.floor((duration % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)) +
          days * 24;
        var minutes = Math.floor((duration % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((duration % (1000 * 60)) / 1000);

        // Display the result
        this.element.querySelector(".countdown-hours").innerHTML = (
          "0" + hours
        ).slice(-2);
        this.element.querySelector(".countdown-minutes").innerHTML = (
          "0" + minutes
        ).slice(-2);
        this.element.querySelector(".countdown-seconds").innerHTML = (
          "0" + seconds
        ).slice(-2);

        // If the count down is finished, write some text
        if (duration < 0) {
          clearInterval(interval);
          this.element.querySelector(".countdown-timer").innerHTML =
            '<p class="countdown-expired">' +
            this.messages[this.lang]["finalized"] +
            "</p>";
        }
      }, 1000);
    }
  }

  // /**
  //  * @class
  //  * @description Controla el envió de formularios.
  //  */
  // class Form {
  //   /**
  //    *
  //    * @param		{domElement}		element						- Formulario en el DOM
  //    * @param		{Objeto} 			config				 		- Configuración necesaria
  //    *  @property	{String}			config.url					- URL donde enviar el formulario
  //    *  @property 	{Object}			config.callbacks 			- Colección de callbacks a ejecutar una vez enviado el formulario
  //    *  @property 	{Number|domElement}	config.callbacks.scrollTo	- Pixeles a los que hacer scroll, o elemento del dom al que tomar como referencia.
  //    */
  //   constructor(element, config) {
  //     this.element = element;
  //     this.url = typeof config.url !== undefined ? config.url : "";
  //     this.fields = config.fields;
  //     this.xhr = new XMLHttpRequest();

  //     if (config.callbacks) {
  //       this.callbacks = {
  //         scrollTo: Number.isInteger(config.callbacks.scrollTo)
  //           ? config.callbacks.scrollTo
  //           : config.callbacks.scrollTo.offsetTop,
  //       };
  //     }

  //     this.init();
  //   }

  //   init() {
  //     this.setEvents();
  //   }

  //   process() {
  //     this.xhr.open("POST", this.url, true);
  //     this.xhr.setRequestHeader("Content-Type", "application/json");
  //     this.xhr.send(JSON.stringify(this.fields));

  //     // You must return false to prevent the default form behavior
  //     return false;
  //   }

  //   callback() {
  //     var scrollToInterval;
  //     var fadeOut = (_target) => {
  //       _target.style.opacity = 1;
  //       _target.style.transition = "opacity 1s";
  //       _target.addEventListener("transitionend", () => {
  //         _target.style.display = "none";
  //       });
  //       _target.style.opacity = 0;
  //     };
  //     var fadeIn = (_target) => {
  //       var interval;

  //       _target.style.opacity = 0;
  //       _target.style.transition = "opacity 1s";
  //       _target.style.display = "block";

  //       interval = setInterval(() => {
  //         if (_target.style.opacity < 1) {
  //           _target.style.opacity = 1;
  //         } else {
  //           clearInterval(interval);
  //         }
  //       }, 900);
  //     };

  //     document.querySelectorAll(".landing1").forEach((target) => {
  //       fadeOut(target);
  //     });
  //     document.querySelectorAll(".landing2").forEach((target) => {
  //       fadeIn(target);
  //     });

  //     scrollToInterval = setInterval(() => {
  //       if (this.callbacks) {
  //         if (this.callbacks.scrollTo) {
  //           window.scrollTo({
  //             top: this.callbacks.scrollTo,
  //             behavior: "smooth",
  //           });
  //         }
  //       }

  //       document.querySelectorAll(".swiper").forEach((target) => {
  //         new Carrousel(target, CONFIGURATION.carrousel[target.id]);
  //       });

  //       if (document.querySelector("[data-aos]")) {
  //         aosInit();
  //       }

  //       // RELLAX
  //       // if (document.querySelector(".rellax")) {
  //       //   rellaxInit();
  //       // }

  //       clearInterval(scrollToInterval);
  //     }, 900);
  //   }

  //   setEvents() {
  //     this.element.addEventListener("submit", (event) => {
  //       event.preventDefault();
  //       this.process();
  //     });
  //     this.xhr.addEventListener("readystatechange", (event) => {
  //       if (event.target.readyState === 4) {
  //         this.callback();
  //       }
  //     });
  //   }
  // }

  // activar();

  // function activar() {
  //   setTimeout(function () {
  //     $(".sarten-ani").addClass("active");
  //     inactive();
  //   }, 3000);
  // }

  // function inactive() {
  //   setTimeout(function () {
  //     $(".sarten-ani").removeClass("active");
  //     activar();
  //   }, 4000);
  // }

  activarThermal();

  function activarThermal() {
    setTimeout(function () {
      $(".thermalspot").attr("src", "img/tefal198-ventaja01-01.png");
      inactiveThermal();
    }, 3000);
  }

  function inactiveThermal() {
    setTimeout(function () {
      $(".thermalspot").attr("src", "img/tefal198-ventaja01-02.png");
      activarThermal();
    }, 3000);
  }

  activarStars();

  function activarStars() {
    setTimeout(function () {
      $(".stars").attr("src", "img/tefal202-stars01.png");
    }, 600);
    setTimeout(function () {
      $(".stars").attr("src", "img/tefal202-stars02.png");
    }, 1200);
    setTimeout(function () {
      $(".stars").attr("src", "img/tefal202-stars03.png");
    }, 1800);
    setTimeout(function () {
      inactiveStars();
    }, 1800);
  }

  function inactiveStars() {
    setTimeout(function () {
      $(".stars").attr("src", "img/tefal202-stars00.png");
      activarStars();
    }, 600);
  }

  window.onload = function () {
    document.querySelectorAll(".copy-code").forEach((target) => {
      new CopyClipboard(target, {
        ...CONFIGURATION.copyCode,
        market: CONFIGURATION.market,
        lang: CONFIGURATION.lang,
      });
    });

    document.querySelectorAll("[data-goto]").forEach((target) => {
      new Goto(target, CONFIGURATION.goto);
    });
    document.querySelectorAll(".offer-section").forEach((target) => {
      new Sticky(target);
    });
    document.querySelectorAll("[data-focus]").forEach((target) => {
      new Focus(target);
    });

    document.querySelectorAll(".videocontainer video").forEach((target) => {
      new Video(target);
    });

    document.querySelectorAll(".swiper").forEach((target) => {
      var conf = CONFIGURATION.carrousel[target.id];

      if (target.classList.contains("gif")) {
        new Carrousel(target, { ...CONFIGURATION.carrousel.gif, ...conf });
      } else {
        new Carrousel(target, conf);
      }
    });

    document.querySelectorAll(".countdown").forEach((target) => {
      new Countdown(target, {
        ...CONFIGURATION.countdown,
        lang: CONFIGURATION.lang,
      });
    });

    if (document.querySelector("form")) {
      new Form(document.querySelector("form"), CONFIGURATION.form);
    }

    // AOS
    if (document.querySelector("[data-aos]")) {
      aosInit();
    }

    document.getElementById("loader").classList.add("loader-hide");

    $(".para-wrapper").paroller();
    $(".para-wrapper2").paroller();

  };
  //Modals
  $("#modal01-button").click(function () {
    $("#modal01").plainModal("open");
  });

  $("#showText").click(function (e) {
    e.preventDefault();
    $("#text").toggleClass("active")
  });
})(jQuery);
