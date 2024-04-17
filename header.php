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
					<a href="<?php echo home_url(); ?>"><img class="image-fluid image header-logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-desktop-logo.png" alt="ValeApp"></a>
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
						Inici
					</a>
				</div>
				<?php button_for_user(); ?>
				<div class="NavMenu-section">
					<button class="NavMenu-collapse collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#servicesCollapse" aria-expanded="false" aria-controls="servicesCollapse">
						Serveis
					</button>
					<div class="collapse" id="servicesCollapse">
						<div class="NavMenu-service">
							<button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedService1" aria-expanded="false" aria-controls="collapsedService1">
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category1.png" alt="valeapp">
								Llar
							</button>
							<div class="collapse" id="collapsedService1">
								<a href="#" class="NavMenu-service-link">Lampista</a>
								<a href="#" class="NavMenu-service-link">Neteja</a>
								<a href="#" class="NavMenu-service-link">Pintura</a>
								<a href="#" class="NavMenu-service-link">Mudança</a>
								<a href="#" class="NavMenu-service-link">Obres</a>
								<a href="#" class="NavMenu-service-link">Electricitat</a>
								<a href="#" class="NavMenu-service-link">Muntatge mobles</a>
								<a href="#" class="NavMenu-service-link">Mecànic</a>
								<a href="#" class="NavMenu-service-link">Solucions ECO</a>
							</div>
						</div>
						<div class="NavMenu-service">
							<button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedService2" aria-expanded="false" aria-controls="collapsedService2">
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category2.png" alt="valeapp">
								Aprèn
							</button>
							<div class="collapse" id="collapsedService2">
								<a href="#" class="NavMenu-service-link">Idiomes</a>
								<a href="#" class="NavMenu-service-link">Instruments</a>
								<a href="#" class="NavMenu-service-link">Clases de repàs</a>
								<a href="#" class="NavMenu-service-link">Ball</a>
								<a href="#" class="NavMenu-service-link">Inversions</a>
								<a href="#" class="NavMenu-service-link">Pintura</a>
								<a href="#" class="NavMenu-service-link">Fotografia</a>
								<a href="#" class="NavMenu-service-link">Jocs</a>
								<a href="#" class="NavMenu-service-link">Pòquer</a>
								<a href="#" class="NavMenu-service-link">Cuina</a>
							</div>
						</div>
						<div class="NavMenu-service">
							<button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedService3" aria-expanded="false" aria-controls="collapsedService3">
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category3.png" alt="valeapp">
								Esport
							</button>
							<div class="collapse" id="collapsedService3">
								<a href="#" class="NavMenu-service-link">Gimnàs</a>
								<a href="#" class="NavMenu-service-link">Arts marcials</a>
								<a href="#" class="NavMenu-service-link">Amb pilota</a>
								<a href="#" class="NavMenu-service-link">Amb raqueta</a>
								<a href="#" class="NavMenu-service-link">A l'aigua</a>
								<a href="#" class="NavMenu-service-link">A l'aire</a>
								<a href="#" class="NavMenu-service-link">Sobre rodes</a>
							</div>
						</div>
						<div class="NavMenu-service">
							<button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedService4" aria-expanded="false" aria-controls="collapsedService4">
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category4.png" alt="valeapp">
								Ment
							</button>
							<div class="collapse" id="collapsedService4">
								<a href="#" class="NavMenu-service-link">Coach</a>
								<a href="#" class="NavMenu-service-link">Psicologia</a>
								<a href="#" class="NavMenu-service-link">Tarot</a>
								<a href="#" class="NavMenu-service-link">Teràpies de parella</a>
								<a href="#" class="NavMenu-service-link">Meditació</a>
								<a href="#" class="NavMenu-service-link">Ioga</a>
								<a href="#" class="NavMenu-service-link">Teràpies alternatives</a>
							</div>
						</div>
						<div class="NavMenu-service">
							<button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedService5" aria-expanded="false" aria-controls="collapsedService5">
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category5.png" alt="valeapp">
								Cures
							</button>
							<div class="collapse" id="collapsedService5">
								<a href="#" class="NavMenu-service-link">Mascotes</a>
								<a href="#" class="NavMenu-service-link">Nens</a>
								<a href="#" class="NavMenu-service-link">Gent gran</a>
								<a href="#" class="NavMenu-service-link">Au pair</a>
								<a href="#" class="NavMenu-service-link">Seguretat</a>
								<a href="#" class="NavMenu-service-link">Massatges</a>
								<a href="#" class="NavMenu-service-link">Dietes</a>
							</div>
						</div>
						<div class="NavMenu-service">
							<button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedService6" aria-expanded="false" aria-controls="collapsedService6">
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category6.png" alt="valeapp">
								Bellesa
							</button>
							<div class="collapse" id="collapsedService6">
								<a href="#" class="NavMenu-service-link">Perruqueria</a>
								<a href="#" class="NavMenu-service-link">Tractaments</a>
								<a href="#" class="NavMenu-service-link">Ungles</a>
								<a href="#" class="NavMenu-service-link">Maquillatge</a>
								<a href="#" class="NavMenu-service-link">Depilació</a>
								<a href="#" class="NavMenu-service-link">Dental</a>
							</div>
						</div>
						<div class="NavMenu-service">
							<button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedService7" aria-expanded="false" aria-controls="collapsedService7">
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category7.png" alt="valeapp">
								Contracta
							</button>
							<div class="collapse" id="collapsedService7">
								<a href="#" class="NavMenu-service-link">Publicitat</a>
								<a href="#" class="NavMenu-service-link">Desenvolupament i app</a>
								<a href="#" class="NavMenu-service-link">Anàlisi de dades</a>
								<a href="#" class="NavMenu-service-link">Legal</a>
								<a href="#" class="NavMenu-service-link">Traduccions</a>
								<a href="#" class="NavMenu-service-link">Xarxes socials</a>
								<a href="#" class="NavMenu-service-link">Foto / Video</a>
								<a href="#" class="NavMenu-service-link">Hostaleria</a>
								<a href="#" class="NavMenu-service-link">Guia turistic</a>
								<a href="#" class="NavMenu-service-link">Agent viatges</a>
								<a href="#" class="NavMenu-service-link">Influencers</a>
							</div>
						</div>
						<div class="NavMenu-service">
							<button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedService8" aria-expanded="false" aria-controls="collapsedService8">
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category8.png" alt="valeapp">
								Comparteix
							</button>
							<div class="collapse" id="collapsedService8">
								<a href="#" class="NavMenu-service-link">Espai</a>
								<a href="#" class="NavMenu-service-link">Estudi</a>
								<a href="#" class="NavMenu-service-link">Consulta</a>
								<a href="#" class="NavMenu-service-link">Equips</a>
								<a href="#" class="NavMenu-service-link">Material</a>
								<a href="#" class="NavMenu-service-link">Pista</a>
							</div>
						</div>
						<div class="NavMenu-service">
							<button class="NavMenu-service-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedService9" aria-expanded="false" aria-controls="collapsedService9">
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category9-green.svg" alt="valeapp">
								Esdeveniments
							</button>
							<div class="collapse" id="collapsedService9">
								<a href="#" class="NavMenu-service-link">Empreses</a>
								<a href="#" class="NavMenu-service-link">Noces</a>
								<a href="#" class="NavMenu-service-link">Comiats / anniversari</a>
								<a href="#" class="NavMenu-service-link">DJ / Musica en viu</a>
								<a href="#" class="NavMenu-service-link">Promocionals</a>
								<a href="#" class="NavMenu-service-link">Sense ànim de lucre</a>
							</div>
						</div>
					</div>
				</div>
				<div class="NavMenu-section">
					<button class="NavMenu-collapse collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#langCollapse" aria-expanded="false" aria-controls="langCollapse">
						Idioma
					</button>
					<div class="collapse" id="langCollapse">
						<a href="#" class="NavMenu-link ml-2">Espanyol</a>
						<a href="#" class="NavMenu-link ml-2">Anglès</a>
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
						<a class="NavMenu-link" href="/crear-cuenta-profesional-o-usuario/">
							Registrar-se
						</a>
						<a class="NavMenu-link" href="/iniciar-sesion-profesional-o-usuario">
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