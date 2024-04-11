(function ($) {
  "use strict";

  // version 1.2.0
  // 16/05/2022
  // by: Ignasi

  /*
	// EXAMPLE FOR URL OBJECT:
	var exampleUrl = {
		'exit_sticky': {
			desktop_vp: '',
			desktop_pv: '',
			mobile_vp: '',
			mobile_pv: '',
			android_vp: '',
			android_pv: '',
			ios_vp: '',
			ios_pv: ''

			desktop_befr: '',
			mobile_befr: '',
			android_befr: '',
			ios_befr: ''
			...
			// example for when there is only one url
			vp: '',
			pv: '',
			befr: '',
			benl: '',
			lufr: '',
			nlnl: ''
		},
	};
	*/

  var changeUrls = true;
  var urls = {
    exit_sticky: {
      desktop_vp: "https://www.veepee.es/gr/catalog/845397",
      desktop_pv: "https://es.privalia.com/gr/catalog/845397",
      mobile_vp: "https://www.veepee.es/gr/catalog/845397",
      mobile_pv: "https://es.privalia.com/gr/catalog/845397",
      android_vp: "appvp://operation/845397",
      android_pv: "privalia://operation/845397",
      ios_vp: "appvp://operation/845397",
      ios_pv: "privalia://operation/845397",
    },
    exit_ingenio: {
      desktop_vp: "https://www.veepee.es/gr/catalog/845397/15174246",
      desktop_pv: "https://es.privalia.com/gr/catalog/845397/15209403",
      mobile_vp: "https://www.veepee.es/gr/catalog/845397/15174246",
      mobile_pv: "https://es.privalia.com/gr/catalog/845397/15209403",
      android_vp: "appvp://fp/845397/15174246",
      android_pv: "privalia://fp/845397/15209403",
      ios_vp: "appvp://fp/845397/15174246",
      ios_pv: "privalia://fp/845397/15209403",
    },
    exit_sartenes: {
      desktop_vp: "https://www.veepee.es/gr/catalog/845397/15174247",
      desktop_pv: "https://es.privalia.com/gr/catalog/845397/15209405",
      mobile_vp: "https://www.veepee.es/gr/catalog/845397/15174247",
      mobile_pv: "https://es.privalia.com/gr/catalog/845397/15209405",
      android_vp: "appvp://fp/845397/15174247",
      android_pv: "privalia://fp/845397/15209405",
      ios_vp: "appvp://fp/845397/15174247",
      ios_pv: "privalia://fp/845397/15209405",
    },
    exit_woks: {
      desktop_vp: "https://www.veepee.es/gr/catalog/845397/15174265",
      desktop_pv: "https://es.privalia.com/gr/catalog/845397/15209404",
      mobile_vp: "https://www.veepee.es/gr/catalog/845397/15174265",
      mobile_pv: "https://es.privalia.com/gr/catalog/845397/15209404",
      android_vp: "appvp://fp/845397/15174265",
      android_pv: "privalia://fp/845397/15209404",
      ios_vp: "appvp://fp/845397/15174265",
      ios_pv: "privalia://fp/845397/15209404",
    },
    exit_ollas: {
      desktop_vp: "https://www.veepee.es/gr/catalog/845397/15174249",
      desktop_pv: "https://es.privalia.com/gr/catalog/845397/15209398",
      mobile_vp: "https://www.veepee.es/gr/catalog/845397/15174249",
      mobile_pv: "https://es.privalia.com/gr/catalog/845397/15209398",
      android_vp: "appvp://fp/845397/15174249",
      android_pv: "privalia://fp/845397/15209398",
      ios_vp: "appvp://fp/845397/15174249",
      ios_pv: "privalia://fp/845397/15209398",
    },

    // exit_device_lang: {
    //   desktop_es: "desktop ES link",
    //   desktop_it: "desktop IT link",
    //   mobile_es: "mobile ES link",
    //   mobile_it: "mobile IT link",
    // },
    // exit_market_lang: {
    //   vp_es: "Veepee ES link",
    //   vp_it: "Veepee IT link",
    //   pv_es: "Privalia ES link",
    //   pv_it: "Privalia IT link",
    // },
    // exit_device: {
    //   desktop: "desktop link",
    //   mobile: "mobile link",
    // },
    // exit_market: {
    //   vp: "Veepee link",
    //   pv: "Privalia link",
    // },
    // exit_lang: {
    //   es: "ES link",
    //   it: "IT link",
    // },
  };

  // var deadline = '2022 05 10 06 30'.replaceAll(' ', '');
  // var urlsCountdown = {
  // 	'exit_sticky': {
  // 		pv: 'https://bit.ly/37Laq3x',
  // 		vp: 'https://bit.ly/37Laq3x',
  // 	},
  // 	'exit_cta': {
  // 		pv: 'https://bit.ly/37Laq3x',
  // 		vp: 'https://bit.ly/37Laq3x',
  // 	}
  // };

  var defaultChanges = {
    brand: _brand ? _brand.toLowerCase() : "pinkbrand",
    lang_html: "",
    text_market: ["Veepee", "Privalia"],
    href_favicon: ["img/market/favicon_vp.ico", "img/market/favicon_pv.ico"],
    href_mosca: "",
    alt_mosca: "",
    src_mosca: [
      "img/market/mosca-superior-vp.svg",
      "img/market/mosca-superior-pv.svg",
    ],
    class_btn: ["btn-veepee", "btn-privalia"],
    class_btnOutline: ["btn-outline-veepee", "btn-outline-privalia"],
    class_text: ["text-veepee", "text-privalia"],
  };

  var privaliaEnabled = _country === "ES" || _country === "IT";

  switch (_country) {
    case "DE":
      // VP Germany
      defaultChanges.lang_html = "de";
      defaultChanges.href_mosca = "https://www.veepee.de/gr/home/default";
      defaultChanges.alt_mosca = "Zurück zu Veepee";

      if (defaultChanges.brand === "greenbrand") {
        defaultChanges.src_footer_logo = "img/market/footer-greenBrand.svg";
        defaultChanges.alt_footer_logo = "GreenBrand logo";
      } else {
        defaultChanges.src_footer_logo = "img/market/footer-pinkBrand.svg";
        defaultChanges.alt_footer_logo = "PinkBrand logo";
      }
      break;
    case "AT":
      // VP Austria
      defaultChanges.lang_html = "de-AT";
      defaultChanges.href_mosca = "https://www.veepee.at/gr/home/default";
      defaultChanges.alt_mosca = "Zurück zu Veepee";

      if (defaultChanges.brand === "greenbrand") {
        defaultChanges.src_footer_logo = "img/market/footer-greenBrand.svg";
        defaultChanges.alt_footer_logo = "GreenBrand logo";
      } else {
        defaultChanges.src_footer_logo = "img/market/footer-pinkBrand.svg";
        defaultChanges.alt_mosca = "PinkBrand logo";
      }
      break;
    case "ES":
      // VP & PV SPAIN
      defaultChanges.lang_html = "es";
      defaultChanges.href_mosca = [
        "https://www.veepee.es/gr/home/default",
        "https://es.privalia.com/gr/home/default",
      ];
      defaultChanges.alt_mosca = ["Volver a Veepee", "Volver a Privalia"];

      if (defaultChanges.brand === "greenbrand") {
        defaultChanges.src_footer_logo = "img/market/footer-greenBrand.svg";
        defaultChanges.alt_footer_logo = "GreenBrand logo";
      } else {
        defaultChanges.src_footer_logo = "img/market/footer-pinkBrand-pv.svg";
        defaultChanges.alt_footer_logo = "PinkBrand logo";
      }
      break;
    case "IT":
      // VP & PV ITALY
      defaultChanges.lang_html = "it";
      defaultChanges.href_mosca = [
        "https://www.veepee.it/gr/home/default",
        "https://it.privalia.com/gr/home/default",
      ];
      defaultChanges.alt_mosca = ["Torna a Veepee", "Torna a Privalia"];

      if (defaultChanges.brand === "greenbrand") {
        defaultChanges.src_footer_logo = "img/market/footer-greenBrand.svg";
        defaultChanges.alt_footer_logo = "GreenBrand logo";
      } else {
        defaultChanges.src_footer_logo = "img/market/footer-pinkBrand-pv.svg";
        defaultChanges.alt_footer_logo = "PinkBrand logo";
      }
      break;
    case "FR":
      if (
        window.location.host == "fr.veepee.be" ||
        window.location.href.indexOf("BEFR") > -1
      ) {
        // VP BELGIUM FR
        defaultChanges.lang_html = "fr-BE";
        defaultChanges.href_mosca = "https://fr.veepee.be/gr/home/default";
        defaultChanges.alt_mosca = "Vers Veepee";

        if (defaultChanges.brand === "carteverte") {
          defaultChanges.src_footer_logo = "img/market/footer-carteVerte.svg";
          defaultChanges.alt_footer_logo = "Carte Verte logo";
        } else {
          defaultChanges.brand = "carterose";
          defaultChanges.src_footer_logo = "img/market/footer-carteRose.svg";
          defaultChanges.alt_footer_logo = "Carte Rose logo";
        }
      } else if (
        window.location.host == "www.veepee.lu" ||
        window.location.href.indexOf("LUFR") > -1
      ) {
        // VP LUXEMBOURG FR
        defaultChanges.lang_html = "fr-LU";
        defaultChanges.href_mosca = "https://www.veepee.lu/gr/home/default";
        defaultChanges.alt_mosca = "Vers Veepee";

        if (defaultChanges.brand === "carteverte") {
          defaultChanges.src_footer_logo = "img/market/footer-carteVerte.svg";
          defaultChanges.alt_footer_logo = "Carte Verte logo";
        } else {
          defaultChanges.brand = "carterose";
          defaultChanges.src_footer_logo = "img/market/footer-carteRose.svg";
          defaultChanges.alt_footer_logo = "Carte Rose logo";
        }
      }
      break;
    case "NL":
      if (
        window.location.host == "nl.veepee.be" ||
        window.location.href.indexOf("BENL") > -1
      ) {
        // VP BELGIUM NL
        defaultChanges.lang_html = "nl-BE";
        defaultChanges.href_mosca = "https://nl.veepee.be/gr/home/default";
        defaultChanges.alt_mosca = "Naar Veepee";

        if (defaultChanges.brand === "carteverte") {
          defaultChanges.src_footer_logo = "img/market/footer-carteVerte.svg";
          defaultChanges.alt_footer_logo = "Carte Verte logo";
        } else {
          defaultChanges.brand = "carterose";
          defaultChanges.src_footer_logo = "img/market/footer-carteRose.svg";
          defaultChanges.alt_footer_logo = "Carte Rose logo";
        }
      } else if (
        window.location.host == "www.veepee.nl" ||
        window.location.href.indexOf("NLNL") > -1
      ) {
        // VP NETHERLANDS NL
        defaultChanges.lang_html = "nl";
        defaultChanges.href_mosca = "https://www.veepee.nl/gr/home/default";
        defaultChanges.alt_mosca = "Naar Veepee";

        if (defaultChanges.brand === "greenbrand") {
          defaultChanges.src_footer_logo = "img/market/footer-greenBrand.svg";
          defaultChanges.alt_footer_logo = "GreenBrand logo";
        } else {
          defaultChanges.src_footer_logo = "img/market/footer-pinkBrand.svg";
          defaultChanges.alt_footer_logo = "PinkBrand logo";
        }
      }
      break;
  }

  var getDevice = () => {
    if (
      navigator.userAgent.match(/vp-iphone/i) ||
      navigator.userAgent.match(/vp-ipad/i)
    ) {
      // IPhone
      return "ios";
    } else if (navigator.userAgent.match(/vp-android-smartphone/i)) {
      // Android
      return "android";
    } else if (window.innerWidth < 768) {
      // Mobile
      return "mobile";
    } else {
      // Desktop
      return "desktop";
    }
  };

  var updateUrls = (_urls) => {
    Object.entries(_urls).forEach(([key, value]) => {
      var element = document.getElementById(key);
      if (element !== null) element.href = value;
    });
  };

  var marketChanges = () => {
    // Veepee = 0 / Privalia = 1
    var market =
      privaliaEnabled &&
      (window.location.host === "es.privalia.com" ||
        window.location.host === "it.privalia.com" ||
        window.location.host === "mutagency.com")
        ? 1
        : 0;
    var reverseMarket = market === 0 ? 1 : 0;

    Object.entries(defaultChanges).forEach(([key, value]) => {
      var property = key.split("_")[0];

      if (key === "lang_html") {
        document.documentElement.lang = value;
      } else if (property === "class") {
        document
          .querySelectorAll(`.${defaultChanges[key][reverseMarket]}`)
          .forEach((element) => {
            element.classList.remove(defaultChanges[key][reverseMarket]);
            element.classList.add(defaultChanges[key][market]);
          });
      } else {
        property = property === "text" ? "innerHTML" : property;
        document.querySelectorAll(`.${key}`).forEach((element) => {
          var value = Array.isArray(defaultChanges[key])
            ? defaultChanges[key][market]
            : defaultChanges[key];

          element[property] = value;
        });
      }
    });

    if (
      defaultChanges.brand === "carterose" ||
      defaultChanges.brand === "carteverte"
    ) {
      document
        .querySelector("footer .footer-logos")
        .classList.add("carte-logos");
    }
  };

  var dynamicChanges = (_urls) => {
    var device = getDevice();
    var currentUrls = {};
    var lang = "";
    var market = "vp";

    switch (_country) {
      case "ES":
        market =
          privaliaEnabled &&
          (window.location.host == "es.privalia.com" ||
            window.location.host == "it.privalia.com" ||
            window.location.host == "mutagency.com")
            ? "pv"
            : "vp";
        lang = "es";
        break;
      case "IT":
        market =
          privaliaEnabled &&
          (window.location.host == "es.privalia.com" ||
            window.location.host == "it.privalia.com" ||
            window.location.host == "mutagency.com")
            ? "pv"
            : "vp";
        lang = "it";
        break;
      case "FR":
        if (
          window.location.host == "fr.veepee.be" ||
          window.location.href.indexOf("BEFR") > -1
        ) {
          market = "vp";
          lang = "befr";
        } else if (
          window.location.host == "www.veepee.lu" ||
          window.location.href.indexOf("LUFR") > -1
        ) {
          market = "vp";
          lang = "lufr";
        }
        break;
      case "NL":
        if (
          window.location.host == "nl.veepee.be" ||
          window.location.href.indexOf("BENL") > -1
        ) {
          market = "vp";
          lang = "benl";
        } else if (
          window.location.host == "www.veepee.nl" ||
          window.location.href.indexOf("NLNL") > -1
        ) {
          market = "vp";
          lang = "nlnl";
        }
        break;
      case "DE":
        market = "vp";
        lang = "de";
        break;
      case "AT":
        market = "vp";
        lang = "at";
        break;
      default:
    }

    Object.entries(_urls).forEach(([_key, _values]) => {
      if (typeof _values === "string") {
        currentUrls[_key] = _values;
      } else {
        Object.entries(_values).forEach(([_urlKey, _urlValue]) => {
          var [_keyDevice, _keyMarket, _keyLang] = _urlKey.split("_");

          if (_keyMarket && !_keyLang) {
            if (
              _keyDevice !== "vp" &&
              _keyDevice !== "pv" &&
              (_keyMarket === "es" ||
                _keyMarket === "it" ||
                _keyMarket === "befr" ||
                _keyMarket === "lufr" ||
                _keyMarket === "benl" ||
                _keyMarket === "nlnl" ||
                _keyMarket === "de" ||
                _keyMarket === "at")
            ) {
              _keyLang = _keyMarket;
              _keyMarket = undefined;
            } else if (_keyDevice === "vp" || _keyDevice === "pv") {
              _keyLang = _keyMarket;
              _keyMarket = _keyDevice;
              _keyDevice = undefined;
            }
          } else if (!_keyMarket) {
            if (_keyDevice === "vp" || _keyDevice === "pv") {
              _keyMarket = _keyDevice;
              _keyDevice = undefined;
            } else if (
              _keyDevice === "es" ||
              _keyDevice === "it" ||
              _keyDevice === "befr" ||
              _keyDevice === "lufr" ||
              _keyDevice === "benl" ||
              _keyDevice === "nlnl" ||
              _keyDevice === "de" ||
              _keyDevice === "at"
            ) {
              _keyLang = _keyDevice;
              _keyDevice = undefined;
            }
          }

          if (
            _keyDevice === device &&
            _keyMarket === market &&
            _keyLang === lang
          ) {
            currentUrls[_key] = _urlValue;
          } else if (
            _keyDevice === device &&
            _keyMarket === market &&
            _keyLang === undefined
          ) {
            currentUrls[_key] = _urlValue;
          } else if (
            _keyDevice === device &&
            _keyMarket === undefined &&
            _keyLang === lang
          ) {
            currentUrls[_key] = _urlValue;
          } else if (
            _keyDevice === undefined &&
            _keyMarket === market &&
            _keyLang === lang
          ) {
            currentUrls[_key] = _urlValue;
          } else if (
            _keyDevice === device &&
            _keyMarket === undefined &&
            _keyLang === undefined
          ) {
            currentUrls[_key] = _urlValue;
          } else if (
            _keyDevice === undefined &&
            _keyMarket === market &&
            _keyLang === undefined
          ) {
            currentUrls[_key] = _urlValue;
          } else if (
            _keyDevice === undefined &&
            _keyMarket === undefined &&
            _keyLang === lang
          ) {
            currentUrls[_key] = _urlValue;
          }
        });
      }
    });

    updateUrls(currentUrls);
  };

  var dynamicCountdownChanges = () => {
    var today = new Date();
    var year = today.getFullYear();
    var month = `0${today.getMonth() + 1}`.slice(-2); // + 1 para evitar el 0 en mes enero
    var day = `0${today.getDate()}`.slice(-2);
    var hour = `0${today.getHours()}`.slice(-2);
    var minute = `0${today.getMinutes()}`.slice(-2);

    var now = "" + year + month + day + hour + minute;

    if (now >= deadline) {
      // New links
      dynamicChanges(urlsCountdown);
    } else {
      // Old links
      dynamicChanges(urls);
    }
  };

  var listAllEvents = () => {
    var listEvents = {};

    document.querySelectorAll(".event").forEach((element) => {
      var dataLabel = element.dataset.label;

      if (dataLabel) {
        listEvents[dataLabel] = null;

        if (dataLabel.includes("exit_") || element.hasAttribute("href")) {
          listEvents[dataLabel] = element.href;
        }
      }
    });

    document.querySelectorAll(".href_mosca").forEach((element) => {
      console.log("mosca url:", element.href);
    });
    console.table(listEvents);
  };

  // Call to default market changes
  marketChanges();

  if (typeof deadline !== "undefined") {
    dynamicCountdownChanges(); // Call to countdown dynamic url changes
  } else if (changeUrls) {
    dynamicChanges(urls); // Call to dynamic url changes
  }

  listAllEvents();
})(jQuery);
