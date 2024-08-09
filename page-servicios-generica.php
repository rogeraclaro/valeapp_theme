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
						  <li class="breadcrumb-item"><a href="/">Inici</a></li>
						  <li class="breadcrumb-item"><a href="#">Serveis</a></li>
						</ol>
					  </nav>
				</div>
				<div class="col-12">
					<h2 class="title">
						Categories
					</h2>
				</div>
			</div>
		</div>
    </section>
	<section class="menu-serveis">
		<?php
			menu_reuse();
		?>
	</section> 
	<section class="section3 Promo HomeOffer">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-12 col-sm-6">
					<img class="img-fluid offer" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-HomeOffer.png" alt="valeapp">
				</div>
				<div class="col-12 col-sm-6 ps-sm-4">
					<h2 class="title">Vols oferir els teus serveis a Vale?</h2>
					<p class="text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. 
						Sed do eiusmod tempor incididunt ut labore.				
					</p>
					<a class="HomeOffer-btn" href="/fer-se-membre">Oferir serveis</a>
				</div>
			</div>
		</div>
	</section>
	<div class="espai">
	</div>

<?php
get_footer();