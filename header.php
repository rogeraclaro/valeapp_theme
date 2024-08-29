<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ValeApp
 */

$current_lang = get_bloginfo('language');
include_once plugin_dir_path(__FILE__) . 'inc/photo-header/header.php';
include_once plugin_dir_path(__FILE__) . 'inc/button-menu.php';
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="facebook-domain-verification" content="" />
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <meta name="google-site-verification" content="" />
  <link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32"
    href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16"
    href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg"
    color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'io'); ?></a>

    <header class="site-header header-desktop d-none d-md-block">
      <!-- <div class="site-branding">
				
			</div>
			<div class="site-nav">
				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav>
			</div>
			<div class="site-cta">
				<div class="pedir-cita">

				</div>
			</div> -->
      <div class="container">
        <div class="row">
          <div class="col-2">
            <a href="<?php echo home_url(); ?>"><img class="image-fluid image header-logo-img"
                src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/valeapp-desktop-logo.png" alt="ValeApp"></a>
          </div>
          <div class="col-10 header-links">

            <div class="NavMenu-section">
              <button class="NavMenu-collapse collapsed header-link" type="button" data-bs-toggle="collapse"
                data-bs-target="#servicesCollapse" aria-expanded="false" aria-controls="servicesCollapse">
                Serveis
              </button>
              <div class="collapse" id="servicesCollapse">
                <div class="NavMenu-service">
                  <button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsedService1" aria-expanded="false" aria-controls="collapsedService1">
                    <img class="img-fluid"
                      src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category1.png"
                      alt="valeapp">
                    Llar
                  </button>
                  <div class="collapse" id="collapsedService1">
                    <a href="/categories/lampista" class="NavMenu-service-link">Lampista</a>
                    <a href="/categories/neteja" class="NavMenu-service-link">Neteja</a>
                    <a href="/categories/pintar_cases" class="NavMenu-service-link">Pintura</a>
                    <a href="/categories/mudanca" class="NavMenu-service-link">Mudança</a>
                    <a href="/categories/obres" class="NavMenu-service-link">Obres</a>
                    <a href="/categories/electricitat" class="NavMenu-service-link">Electricitat</a>
                    <a href="/categories/muntatge_mobles" class="NavMenu-service-link">Muntatge mobles</a>
                    <a href="/categories/mecanic" class="NavMenu-service-link">Mecànic</a>
                    <a href="/categories/solucions_eco" class="NavMenu-service-link">Solucions ECO</a>
                  </div>
                </div>
                <div class="NavMenu-service">
                  <button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsedService2" aria-expanded="false" aria-controls="collapsedService2">
                    <img class="img-fluid"
                      src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category2.png"
                      alt="valeapp">
                    Aprèn
                  </button>
                  <div class="collapse" id="collapsedService2">
                    <a href="/categories/idiomes" class="NavMenu-service-link">Idiomes</a>
                    <a href="/categories/instruments" class="NavMenu-service-link">Instruments</a>
                    <a href="/categories/classes_de_repas" class="NavMenu-service-link">Clases de repàs</a>
                    <a href="/categories/ball" class="NavMenu-service-link">Ball</a>
                    <a href="/categories/inversions" class="NavMenu-service-link">Inversions</a>
                    <a href="/categories/pintura" class="NavMenu-service-link">Pintura</a>
                    <a href="/categories/fotografia" class="NavMenu-service-link">Fotografia</a>
                    <a href="/categories/jocs" class="NavMenu-service-link">Jocs</a>
                    <a href="/categories/poquer" class="NavMenu-service-link">Pòquer</a>
                    <a href="/categories/cuina" class="NavMenu-service-link">Cuina</a>
                  </div>
                </div>
                <div class="NavMenu-service">
                  <button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsedService3" aria-expanded="false" aria-controls="collapsedService3">
                    <img class="img-fluid"
                      src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category3.png"
                      alt="valeapp">
                    Esport
                  </button>
                  <div class="collapse" id="collapsedService3">
                    <a href="/categories/gimnas" class="NavMenu-service-link">Gimnàs</a>
                    <a href="/categories/arts_marcials" class="NavMenu-service-link">Arts marcials</a>
                    <a href="/categories/amb_pilota" class="NavMenu-service-link">Amb pilota</a>
                    <a href="/categories/amb_raqueta" class="NavMenu-service-link">Amb raqueta</a>
                    <a href="/categories/al_aigua" class="NavMenu-service-link">A l'aigua</a>
                    <a href="/categories/al_aire" class="NavMenu-service-link">A l'aire</a>
                    <a href="/categories/sobre_rodes" class="NavMenu-service-link">Sobre rodes</a>
                  </div>
                </div>
                <div class="NavMenu-service">
                  <button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsedService4" aria-expanded="false" aria-controls="collapsedService4">
                    <img class="img-fluid"
                      src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category4.png"
                      alt="valeapp">
                    Ment
                  </button>
                  <div class="collapse" id="collapsedService4">
                    <a href="/categories/entrenador" class="NavMenu-service-link">Coach</a>
                    <a href="/categories/psicologia" class="NavMenu-service-link">Psicologia</a>
                    <a href="/categories/tarot" class="NavMenu-service-link">Tarot</a>
                    <a href="/categories/terapies_de_parella" class="NavMenu-service-link">Teràpies de parella</a>
                    <a href="/categories/meditacio" class="NavMenu-service-link">Meditació</a>
                    <a href="/categories/ioga" class="NavMenu-service-link">Ioga</a>
                    <a href="/categories/terapies_alternatives" class="NavMenu-service-link">Teràpies alternatives</a>
                  </div>
                </div>
                <div class="NavMenu-service">
                  <button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsedService5" aria-expanded="false" aria-controls="collapsedService5">
                    <img class="img-fluid"
                      src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category5.png"
                      alt="valeapp">
                    Cures
                  </button>
                  <div class="collapse" id="collapsedService5">
                    <a href="/categories/mascotes" class="NavMenu-service-link">Mascotes</a>
                    <a href="/categories/nens" class="NavMenu-service-link">Nens</a>
                    <a href="/categories/gent_gran" class="NavMenu-service-link">Gent gran</a>
                    <a href="/categories/au_pair" class="NavMenu-service-link">Au pair</a>
                    <a href="/categories/seguretat" class="NavMenu-service-link">Seguretat</a>
                    <a href="/categories/massatges" class="NavMenu-service-link">Massatges</a>
                    <a href="/categories/dietes" class="NavMenu-service-link">Dietes</a>
                  </div>
                </div>
                <div class="NavMenu-service">
                  <button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsedService6" aria-expanded="false" aria-controls="collapsedService6">
                    <img class="img-fluid"
                      src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category6.png"
                      alt="valeapp">
                    Bellesa
                  </button>
                  <div class="collapse" id="collapsedService6">
                    <a href="/categories/perruqueria" class="NavMenu-service-link">Perruqueria</a>
                    <a href="/categories/tractaments" class="NavMenu-service-link">Tractaments</a>
                    <a href="/categories/ungles" class="NavMenu-service-link">Ungles</a>
                    <a href="/categories/maquillatge" class="NavMenu-service-link">Maquillatge</a>
                    <a href="/categories/depilacio" class="NavMenu-service-link">Depilació</a>
                    <a href="/categories/dental" class="NavMenu-service-link">Dental</a>
                  </div>
                </div>
                <div class="NavMenu-service">
                  <button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsedService7" aria-expanded="false" aria-controls="collapsedService7">
                    <img class="img-fluid"
                      src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category7.png"
                      alt="valeapp">
                    Contracta
                  </button>
                  <div class="collapse" id="collapsedService7">
                    <a href="/categories/publicitat" class="NavMenu-service-link">Publicitat</a>
                    <a href="/categories/desenvolupament_i_app" class="NavMenu-service-link">Desenvolupament i app</a>
                    <a href="/categories/analisi_de_dades" class="NavMenu-service-link">Anàlisi de dades</a>
                    <a href="/categories/legal" class="NavMenu-service-link">Legal</a>
                    <a href="/categories/traduccions" class="NavMenu-service-link">Traduccions</a>
                    <a href="/categories/xarxes_socials" class="NavMenu-service-link">Xarxes socials</a>
                    <a href="/categories/foto_o_video" class="NavMenu-service-link">Foto / Video</a>
                    <a href="/categories/hostaleria" class="NavMenu-service-link">Hostaleria</a>
                    <a href="/categories/guia_turistic" class="NavMenu-service-link">Guia turistic</a>
                    <a href="/categories/agent_viatges" class="NavMenu-service-link">Agent viatges</a>
                    <a href="/categories/influencers" class="NavMenu-service-link">Influencers</a>
                  </div>
                </div>
                <div class="NavMenu-service">
                  <button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsedService8" aria-expanded="false" aria-controls="collapsedService8">
                    <img class="img-fluid"
                      src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category8.png"
                      alt="valeapp">
                    Comparteix
                  </button>
                  <div class="collapse" id="collapsedService8">
                    <a href="/categories/espai" class="NavMenu-service-link">Espai</a>
                    <a href="/categories/estudi" class="NavMenu-service-link">Estudi</a>
                    <a href="/categories/consulta" class="NavMenu-service-link">Consulta</a>
                    <a href="/categories/equips" class="NavMenu-service-link">Equips</a>
                    <a href="/categories/material" class="NavMenu-service-link">Material</a>
                    <a href="/categories/pista" class="NavMenu-service-link">Pista</a>
                  </div>
                </div>
                <div class="NavMenu-service">
                  <button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsedService9" aria-expanded="false" aria-controls="collapsedService9">
                    <img class="img-fluid"
                      src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category9-green.svg"
                      alt="valeapp">
                    Esdeveniments
                  </button>
                  <div class="collapse" id="collapsedService9">
                    <a href="/categories/empreses" class="NavMenu-service-link">Empreses</a>
                    <a href="/categories/noces" class="NavMenu-service-link">Noces</a>
                    <a href="/categories/comiats_o_anniversari" class="NavMenu-service-link">Comiats / anniversari</a>
                    <a href="/categories/dj_o_musica_en_viu" class="NavMenu-service-link">DJ / Musica en viu</a>
                    <a href="/categories/promocionals" class="NavMenu-service-link">Promocionals</a>
                    <a href="/categories/sense_anim_de_lucre" class="NavMenu-service-link">Sense ànim de lucre</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="header-links">
              <a href="/fer-se-membre" class="header-link header-link-active">Membresía</a>

              <?php
							if (!is_user_logged_in()) {
							?>
              <a href="/crear-compte-professional-o-usuari" class="header-link">Registrar-se</a>
              <a href="/iniciar-sessio-professional-o-usuari" class="header-link">Iniciar sessió
                <img class="image-fluid header-user-icon"
                  src="<?php echo get_stylesheet_directory_uri(); ?>/img/header-user-icon.svg" alt="user icon" />
              </a>
              <?php
							}
							//change_button_menu_header()
							?>
              <?php
							if (is_user_logged_in()) {
							?>
              <div class="publicar">
                <?php button_for_user(); ?>
              </div>
              <div class="userlogin">
                <i class="bi bi-person-circle"></i>
                <?php
									add_photo_profile_header();
									?>
              </div>
              <a class="header-link" href="<?php echo wp_logout_url(home_url()); ?>">
                Tancar sessió
              </a>
              <?php
							}
							?>

              <!-- <a href="/fer-se-membre" class="header-link header-link-active">Oferir serveis</a>
							<a href="/crear-compte-professional-o-usuari" class="header-link">Registrar-se</a>
							<a href="/iniciar-sessio-professional-o-usuari" class="header-link">Iniciar sessió
								<img class="image-fluid header-user-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/header-user-icon.svg" alt="user icon" />
							</a> -->
            </div>
            <div id="weglot_here"></div>
          </div>
        </div>
      </div>
    </header>

    <header class="site-header header-mobile d-md-none">
      <div class="menumobile">
        <button class="menuburger" type="button" data-bs-toggle="offcanvas" data-bs-target="#navMenu"
          aria-controls="navMenu">
          <span class="menu-global menu-top"></span>
          <span class="menu-global menu-middle"></span>
          <span class="menu-global menu-bottom"></span>
        </button>
      </div>
      <div class="logomobile">
        <img class="image-fluid image" width="110px"
          src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/valeapp-desktop-logo.png" alt="ValeApp">
      </div>
      <div class="header-right-block">
        <div class="cerca">
          <i class="bi bi-search"></i>
        </div>
        <div class="userlogin">
          <i class="bi bi-person-circle"></i>
          <?php
					add_photo_profile_header();
					?>
        </div>
      </div>
    </header>

    <div class="NavMenu offcanvas offcanvas-start" tabindex="-1" id="navMenu" aria-labelledby="navMenuLabel">
      <div class="offcanvas-header">
        <button type="button" class="btn-close text-reset NavMenu-closeBtn" data-bs-dismiss="offcanvas"
          aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="NavMenu-section">
          <a class="NavMenu-link" href="<?php echo home_url(); ?>">
            Inici
          </a>
        </div>
        <?php button_for_user(); ?>
        <div class="NavMenu-section">
          <button class="NavMenu-collapse collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#servicesCollapse" aria-expanded="false" aria-controls="servicesCollapse">
            Serveis
          </button>
          <div class="collapse" id="servicesCollapse">
            <div class="NavMenu-service">
              <button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsedService1" aria-expanded="false" aria-controls="collapsedService1">
                <img class="img-fluid"
                  src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category1.png" alt="valeapp">
                Llar
              </button>
              <div class="collapse" id="collapsedService1">
                <a href="/categories/fontaneria" class="NavMenu-service-link">Lampista</a>
                <a href="/categories/limpieza" class="NavMenu-service-link">Neteja</a>
                <a href="/categories/pintura" class="NavMenu-service-link">Pintura</a>
                <a href="/categories/mudanza" class="NavMenu-service-link">Mudança</a>
                <a href="/categories/obras" class="NavMenu-service-link">Obres</a>
                <a href="/categories/electricidad" class="NavMenu-service-link">Electricitat</a>
                <a href="/categories/montaje-muebles" class="NavMenu-service-link">Muntatge mobles</a>
                <a href="/categories/mecanico" class="NavMenu-service-link">Mecànic</a>
                <a href="/categories/soluciones-eco" class="NavMenu-service-link">Solucions ECO</a>
              </div>
            </div>
            <div class="NavMenu-service">
              <button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsedService2" aria-expanded="false" aria-controls="collapsedService2">
                <img class="img-fluid"
                  src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category2.png" alt="valeapp">
                Aprèn
              </button>
              <div class="collapse" id="collapsedService2">
                <a href="/categories/idiomas" class="NavMenu-service-link">Idiomes</a>
                <a href="/categories/instrumentos" class="NavMenu-service-link">Instruments</a>
                <a href="/categories/clases-de-repaso" class="NavMenu-service-link">Clases de repàs</a>
                <a href="/categories/baile" class="NavMenu-service-link">Ball</a>
                <a href="/categories/inversiones" class="NavMenu-service-link">Inversions</a>
                <a href="/categories/pintura" class="NavMenu-service-link">Pintura</a>
                <a href="/categories/fotografia" class="NavMenu-service-link">Fotografia</a>
                <a href="/categories/gaming" class="NavMenu-service-link">Jocs</a>
                <a href="/categories/poker" class="NavMenu-service-link">Pòquer</a>
                <a href="/categories/cocina" class="NavMenu-service-link">Cuina</a>
              </div>
            </div>
            <div class="NavMenu-service">
              <button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsedService3" aria-expanded="false" aria-controls="collapsedService3">
                <img class="img-fluid"
                  src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category3.png" alt="valeapp">
                Esport
              </button>
              <div class="collapse" id="collapsedService3">
                <a href="/categories/gim" class="NavMenu-service-link">Gimnàs</a>
                <a href="/categories/artes-marciales" class="NavMenu-service-link">Arts marcials</a>
                <a href="/categories/con-pelota" class="NavMenu-service-link">Amb pilota</a>
                <a href="/categories/con-raqueta" class="NavMenu-service-link">Amb raqueta</a>
                <a href="/categories/al-agua" class="NavMenu-service-link">A l'aigua</a>
                <a href="/categories/al-aire" class="NavMenu-service-link">A l'aire</a>
                <a href="/categories/sobre-ruedas" class="NavMenu-service-link">Sobre rodes</a>
              </div>
            </div>
            <div class="NavMenu-service">
              <button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsedService4" aria-expanded="false" aria-controls="collapsedService4">
                <img class="img-fluid"
                  src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category4.png" alt="valeapp">
                Ment
              </button>
              <div class="collapse" id="collapsedService4">
                <a href="/categories/coach" class="NavMenu-service-link">Coach</a>
                <a href="/categories/psicologia" class="NavMenu-service-link">Psicologia</a>
                <a href="/categories/tarot" class="NavMenu-service-link">Tarot</a>
                <a href="/categories/terapias-de-pareja" class="NavMenu-service-link">Teràpies de parella</a>
                <a href="/categories/meditacion" class="NavMenu-service-link">Meditació</a>
                <a href="/categories/yoga" class="NavMenu-service-link">Ioga</a>
                <a href="/categories/terapias-alternativas" class="NavMenu-service-link">Teràpies alternatives</a>
              </div>
            </div>
            <div class="NavMenu-service">
              <button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsedService5" aria-expanded="false" aria-controls="collapsedService5">
                <img class="img-fluid"
                  src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category5.png" alt="valeapp">
                Cures
              </button>
              <div class="collapse" id="collapsedService5">
                <a href="/categories/mascotas" class="NavMenu-service-link">Mascotes</a>
                <a href="/categories/ninos" class="NavMenu-service-link">Nens</a>
                <a href="/categories/personas-mayores" class="NavMenu-service-link">Gent gran</a>
                <a href="/categories/au-pair" class="NavMenu-service-link">Au pair</a>
                <a href="/categories/seguridad" class="NavMenu-service-link">Seguretat</a>
                <a href="/categories/masajes" class="NavMenu-service-link">Massatges</a>
                <a href="/categories/dietas" class="NavMenu-service-link">Dietes</a>
              </div>
            </div>
            <div class="NavMenu-service">
              <button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsedService6" aria-expanded="false" aria-controls="collapsedService6">
                <img class="img-fluid"
                  src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category6.png" alt="valeapp">
                Bellesa
              </button>
              <div class="collapse" id="collapsedService6">
                <a href="/categories/peluqueria" class="NavMenu-service-link">Perruqueria</a>
                <a href="/categories/tratamientos" class="NavMenu-service-link">Tractaments</a>
                <a href="/categories/unas" class="NavMenu-service-link">Ungles</a>
                <a href="/categories/maquillaje" class="NavMenu-service-link">Maquillatge</a>
                <a href="/categories/depilacion" class="NavMenu-service-link">Depilació</a>
                <a href="/categories/dental" class="NavMenu-service-link">Dental</a>
              </div>
            </div>
            <div class="NavMenu-service">
              <button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsedService7" aria-expanded="false" aria-controls="collapsedService7">
                <img class="img-fluid"
                  src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category7.png" alt="valeapp">
                Contracta
              </button>
              <div class="collapse" id="collapsedService7">
                <a href="/categories/publicidad" class="NavMenu-service-link">Publicitat</a>
                <a href="/categories/desarrollo-y-app" class="NavMenu-service-link">Desenvolupament i app</a>
                <a href="/categories/analisis-de-datos" class="NavMenu-service-link">Anàlisi de dades</a>
                <a href="/categories/legal" class="NavMenu-service-link">Legal</a>
                <a href="/categories/traducciones" class="NavMenu-service-link">Traduccions</a>
                <a href="/categories/redes-sociales" class="NavMenu-service-link">Xarxes socials</a>
                <a href="/categories/foto-video" class="NavMenu-service-link">Foto / Video</a>
                <a href="/categories/hosteleria" class="NavMenu-service-link">Hostaleria</a>
                <a href="/categories/guia-turistico" class="NavMenu-service-link">Guia turistic</a>
                <a href="/categories/agente-viajes" class="NavMenu-service-link">Agent viatges</a>
                <a href="/categories/influencers" class="NavMenu-service-link">Influencers</a>
              </div>
            </div>
            <div class="NavMenu-service">
              <button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsedService8" aria-expanded="false" aria-controls="collapsedService8">
                <img class="img-fluid"
                  src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category8.png" alt="valeapp">
                Comparteix
              </button>
              <div class="collapse" id="collapsedService8">
                <a href="/categories/espacio" class="NavMenu-service-link">Espai</a>
                <a href="/categories/estudio" class="NavMenu-service-link">Estudi</a>
                <a href="/categories/consulta" class="NavMenu-service-link">Consulta</a>
                <a href="/categories/equipos" class="NavMenu-service-link">Equips</a>
                <a href="/categories/material" class="NavMenu-service-link">Material</a>
                <a href="/categories/pista" class="NavMenu-service-link">Pista</a>
              </div>
            </div>
            <div class="NavMenu-service">
              <button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsedService9" aria-expanded="false" aria-controls="collapsedService9">
                <img class="img-fluid"
                  src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category9-green.svg"
                  alt="valeapp">
                Esdeveniments
              </button>
              <div class="collapse" id="collapsedService9">
                <a href="/categories/empresas" class="NavMenu-service-link">Empreses</a>
                <a href="/categories/bodas" class="NavMenu-service-link">Noces</a>
                <a href="/categories/despedidas-o-cumpleanos" class="NavMenu-service-link">Comiats / anniversari</a>
                <a href="/categories/dj-o-musica-en-vivo" class="NavMenu-service-link">DJ / Musica en viu</a>
                <a href="/categories/promocionales" class="NavMenu-service-link">Promocionals</a>
                <a href="/categories/sin-animo-de-lucro" class="NavMenu-service-link">Sense ànim de lucre</a>
              </div>
            </div>
          </div>
        </div>
        <div class="NavMenu-section">
          <button class="NavMenu-collapse collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#langCollapse" aria-expanded="false" aria-controls="langCollapse">
            Idioma
          </button>
          <div class="collapse" id="langCollapse">
            <div id="weglot_here"></div>
          </div>
        </div>
        <div class="NavMenu-section">
          <a class="NavMenu-link" href="#">
            Contacte
          </a>
        </div>
        <?php
				if (!is_user_logged_in()) {
				?>
        <div class="NavMenu-section">
          <a class="NavMenu-link" href="/crear-compte-professional-o-usuari/">
            Registrar-se
          </a>
          <a class="NavMenu-link" href="/iniciar-sessio-professional-o-usuari">
            Iniciar sessió
          </a>
        </div>
        <?php
				}
				change_button_menu_header()
				?>
        <?php
				if (is_user_logged_in()) {
				?>
        <div class="NavMenu-section NavMenu-lastSection">
          <a class="NavMenu-link" href="<?php echo wp_logout_url(home_url()); ?>">
            Tancar sessió
          </a>
        </div>
        <?php
				}
				?>
      </div>
    </div>