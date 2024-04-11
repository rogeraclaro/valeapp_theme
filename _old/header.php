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
						<img class="image-fluid image header-logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-desktop-logo.png" alt="ValeApp">
					</div>
					<div class="col-10 header-links">
						<div class="header-links">
							<a href="#" class="header-link">Serveis</a>
							<a href="#" class="header-link header-link-active">Oferir serveis</a>
							<a href="#" class="header-link">
								Registrar-se/Iniciar sessió
								<img class="image-fluid header-user-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/header-user-icon.svg" alt="user icon" />
							</a>
						</div>
						<div class="header-lang-wrapper dropdown">
							<button type="button" class="header-lang dropdown-toggle" id="header-lang-dropdown" data-bs-toggle="dropdown" aria-expanded="false" >
								CA
								<img class="image-fluid header-lang-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-down.png" alt="lang chevron" />
							</button>
							<div class="header-lang-content dropdown-menu" aria-labelledby="header-lang-dropdown">
								<button type="button" class="header-lang header-lang-option">
									ES
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<header class="site-header header-mobile d-md-none">
			<div class="menumobile">
				<button class="menuburger" type="button" data-bs-toggle="offcanvas" data-bs-target="#navMenu" aria-controls="navMenu">
					<span class="menu-global menu-top"></span>
					<span class="menu-global menu-middle"></span>
					<span class="menu-global menu-bottom"></span>
				</button>
			</div>
			<div class="logomobile">
				<img class="image-fluid image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valelogo.png" alt="ValeApp">
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
				<button type="button" class="btn-close text-reset NavMenu-closeBtn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
				<div class="NavMenu-section">
					<a class="NavMenu-link" href="/">
						Home
					</a>
				</div>
				<?php button_for_user(); ?>
				<div class="NavMenu-section">
					<button class="NavMenu-collapse collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#servicesCollapse" aria-expanded="false" aria-controls="servicesCollapse">
						Servicios
					</button>
					<div class="collapse" id="servicesCollapse">
						<div class="NavMenu-service">
							<button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedService1" aria-expanded="false" aria-controls="collapsedService1">
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category1.png" alt="valeapp">
								Hogar
							</button>
							<div class="collapse" id="collapsedService1">
								<a href="#" class="NavMenu-service-link">Fontanería</a>
								<a href="#" class="NavMenu-service-link">Limpieza</a>
								<a href="#" class="NavMenu-service-link">Pintura</a>
								<a href="#" class="NavMenu-service-link">Mudanza</a>
								<a href="#" class="NavMenu-service-link">Obras</a>
								<a href="#" class="NavMenu-service-link">Electricidad</a>
								<a href="#" class="NavMenu-service-link">Montaje</a>
								<a href="#" class="NavMenu-service-link">Muebles</a>
							</div>
						</div>
						<div class="NavMenu-service">
							<button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedService2" aria-expanded="false" aria-controls="collapsedService2">
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category2.png" alt="valeapp">
								Aprende
							</button>
							<div class="collapse" id="collapsedService2">
								<a href="#" class="NavMenu-service-link">Idiomas</a>
								<a href="#" class="NavMenu-service-link">Idiomas</a>
								<a href="#" class="NavMenu-service-link">Clases de repaso</a>
								<a href="#" class="NavMenu-service-link">Baile</a>
								<a href="#" class="NavMenu-service-link">Inversiones</a>
								<a href="#" class="NavMenu-service-link">Pintura</a>
								<a href="#" class="NavMenu-service-link">Fotografía</a>
								<a href="#" class="NavMenu-service-link">Gaming</a>
								<a href="#" class="NavMenu-service-link">Cocina</a>
							</div>
						</div>
						<div class="NavMenu-service">
							<button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedService3" aria-expanded="false" aria-controls="collapsedService3">
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category3.png" alt="valeapp">
								Deporte
							</button>
							<div class="collapse" id="collapsedService3">
								<a href="#" class="NavMenu-service-link">Ski o tabla</a>
								<a href="#" class="NavMenu-service-link">De palo</a>
								<a href="#" class="NavMenu-service-link">Con balón</a>
								<a href="#" class="NavMenu-service-link">Con raqueta</a>
								<a href="#" class="NavMenu-service-link">Al agua</a>
								<a href="#" class="NavMenu-service-link">Al aire</a>
								<a href="#" class="NavMenu-service-link">Sobre ruedas</a>
							</div>
						</div>
						<div class="NavMenu-service">
							<button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedService4" aria-expanded="false" aria-controls="collapsedService4">
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category4.png" alt="valeapp">
								Mente
							</button>
							<div class="collapse" id="collapsedService4">
								<a href="#" class="NavMenu-service-link">Coach</a>
								<a href="#" class="NavMenu-service-link">Psicología</a>
								<a href="#" class="NavMenu-service-link">Tarot</a>
								<a href="#" class="NavMenu-service-link">Terapias de pareja</a>
								<a href="#" class="NavMenu-service-link">Meditación</a>
								<a href="#" class="NavMenu-service-link">Yoga</a>
								<a href="#" class="NavMenu-service-link">Terapias alternativas</a>
							</div>
						</div>
						<div class="NavMenu-service">
							<button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedService5" aria-expanded="false" aria-controls="collapsedService5">
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category5.png" alt="valeapp">
								Cuidados
							</button>
							<div class="collapse" id="collapsedService5">
								<a href="#" class="NavMenu-service-link">Mascotas</a>
								<a href="#" class="NavMenu-service-link">Niños</a>
								<a href="#" class="NavMenu-service-link">Personas mayores</a>
								<a href="#" class="NavMenu-service-link">Au pair</a>
								<a href="#" class="NavMenu-service-link">Seguridad</a>
								<a href="#" class="NavMenu-service-link">Masajes</a>
								<a href="#" class="NavMenu-service-link">Dietas</a>
							</div>
						</div>
						<div class="NavMenu-service">
							<button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedService6" aria-expanded="false" aria-controls="collapsedService6">
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category6.png" alt="valeapp">
								Belleza
							</button>
							<div class="collapse" id="collapsedService6">
								<a href="#" class="NavMenu-service-link">Peluquería</a>
								<a href="#" class="NavMenu-service-link">Tratamientos</a>
								<a href="#" class="NavMenu-service-link">Uñas</a>
								<a href="#" class="NavMenu-service-link">Maquillaje</a>
								<a href="#" class="NavMenu-service-link">Depilación</a>
								<a href="#" class="NavMenu-service-link">Dental</a>
							</div>
						</div>
						<div class="NavMenu-service">
							<button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedService7" aria-expanded="false" aria-controls="collapsedService7">
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category7.png" alt="valeapp">
								Contrata
							</button>
							<div class="collapse" id="collapsedService7">
								<a href="#" class="NavMenu-service-link">Publicidad</a>
								<a href="#" class="NavMenu-service-link">Desarrollo y app</a>
								<a href="#" class="NavMenu-service-link">Análisis de datos</a>
								<a href="#" class="NavMenu-service-link">Legal</a>
								<a href="#" class="NavMenu-service-link">Traducciones</a>
								<a href="#" class="NavMenu-service-link">Redes sociales</a>
								<a href="#" class="NavMenu-service-link">Foto / Video</a>
								<a href="#" class="NavMenu-service-link">Hostelería</a>
								<a href="#" class="NavMenu-service-link">Guía turístico</a>
								<a href="#" class="NavMenu-service-link">Agente viajes</a>
								<a href="#" class="NavMenu-service-link">Influencers</a>
							</div>
						</div>
						<div class="NavMenu-service">
							<button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedService8" aria-expanded="false" aria-controls="collapsedService8">
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category8.png" alt="valeapp">
								Comparte
							</button>
							<div class="collapse" id="collapsedService8">
								<a href="#" class="NavMenu-service-link">Espacio</a>
								<a href="#" class="NavMenu-service-link">Estudio</a>
								<a href="#" class="NavMenu-service-link">Consulta</a>
								<a href="#" class="NavMenu-service-link">Equipo</a>
								<a href="#" class="NavMenu-service-link">Material</a>
								<a href="#" class="NavMenu-service-link">Pista</a>
							</div>
						</div>
						<div class="NavMenu-service">
							<button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedService9" aria-expanded="false" aria-controls="collapsedService9">
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category9-green.svg" alt="valeapp">
								Eventos
							</button>
							<div class="collapse" id="collapsedService9">
								<a href="#" class="NavMenu-service-link">Empresas</a>
								<a href="#" class="NavMenu-service-link">Bodas</a>
								<a href="#" class="NavMenu-service-link">Despedidas / cumpleaños</a>
								<a href="#" class="NavMenu-service-link">DJ / Musica en vivo</a>
								<a href="#" class="NavMenu-service-link">Promocionales</a>
								<a href="#" class="NavMenu-service-link">Sin animo de lucro</a>
							</div>
						</div>
					</div>
				</div>
				<div class="NavMenu-section">
					<button class="NavMenu-collapse collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#langCollapse" aria-expanded="false" aria-controls="langCollapse">
						Idioma
					</button>
					<div class="collapse" id="langCollapse">
						<a href="#" class="NavMenu-link ml-2">Español</a>
						<a href="#" class="NavMenu-link ml-2">Inglés</a>
					</div>
				</div>
				<div class="NavMenu-section">
					<a class="NavMenu-link" href="#">
						Contacto
					</a>
				</div>
				<?php
				if (!is_user_logged_in()) {
				?>
					<div class="NavMenu-section">
						<a class="NavMenu-link" href="/crear-cuenta-profesional-o-usuario/">
							Registrarse
						</a>
						<a class="NavMenu-link" href="/iniciar-sesion-profesional-o-usuario">
							Iniciar sesión
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
							Cerrar sesión
						</a>
					</div>
				<?php
				}
				?>
			</div>
		</div>