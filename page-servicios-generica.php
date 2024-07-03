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
        <h2 class="OfferService-title">¿Quieres ofrecer tus <br class="xs-br"/> servicios en Vale?</h2>
        <p class="OfferService-text">Lorem ipsum dolor sit amet <br class="xs-br"/> consectetur adipisicing elit, sed do <br class="xs-br"/> eiusmond tempor indicidunt ut labore. <br class="xs-br"/> et dolore magna aliqua. Ut enim ad</p>
        <a class="HomeOffer-btn d-block" href="/iniciar-sessio-professional-o-usuari">Ofrecer servicios</a>
    </section>

<?php
get_footer();