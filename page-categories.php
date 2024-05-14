<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ValeApp
 */

get_header();
?>
    <section class="section2 servicio-generica">
        <div class="container">
			<div class="row">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
						  <li class="breadcrumb-item"><a href="#">Inicio</a></li>
						  <li class="breadcrumb-item"><a href="#">Servicios</a></li>
						</ol>
					  </nav>
				</div>
				<div class="col-12">
					<h2 class="title">
						Categorías
					</h2>
				</div>
			</div>
		</div>
    </section>
<?php
menu_reuse();
?>
    <section class="OfferService">
        <img class="OfferService-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-HomeOffer.png" alt="valeapp">
        <h2 class="OfferService-title">Vols oferir els teus serveis a Vale?</h2>
        <p class="OfferService-text">Ofereix els teus serveis a una àmplia gamma de clients potencials que busquen ajuda amb tasques quotidianes i projectes especialitzats. Expandeix el teu negoci avui mateix!</p>
        <a class="HomeOffer-btn d-block" href="/iniciar-sesion-profesional-o-usuario">Ofereix serveis</a>
    </section>

<?php
get_footer();