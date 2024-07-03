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

$users = get_users([
    'role' => 'proveedorvaleapp',
]);

if ($users) {

?>

	<!-- BEGIN SECTION 2 -->
	<section class="section2 pages" id="page2">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
						  <li class="breadcrumb-item"><a href="#">Inicio</a></li>
						  <li class="breadcrumb-item"><a href="#">Servicios</a></li>
						  <li class="breadcrumb-item active" aria-current="page">Nombre de servicio</li>
						</ol>
					  </nav>
				</div>
				<div class="col-12">
					<h2 class="title">
						Nombre servicio
					</h2>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION 2 -->

	<!-- BEGIN SECTION 3 -->
	<section class="section3 pages" id="page3">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<button class="btn-filtros">
						<img class="image-fluid image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-filter-icon.png" alt="ValeApp">
						<span class="text">Filtros</span>
					</button>
				</div>
				<div class="col-12">
					<div class="wrapper-text">
						<p>Ordenar por <span>Mejor valorados</span></p>
						<img class="image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-down.png" alt="ValeApp">
					</div>
				</div>
				<div id="cards" class="swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="cards">
								<?php foreach($users as $user) {  ?>
								<div class="card" id="modal01-button">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v3.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name"><?php echo get_user_meta($user->ID, 'first_name', true); ?></p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate"><?php echo get_user_meta($user->ID, 'assessment', true); ?></p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div>
								<?php } ?>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="cards">	
							<?php foreach($users as $user) {  ?>
								<div class="card" id="modal01-button">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v3.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name"><?php echo get_user_meta($user->ID, 'first_name', true); ?></p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate"><?php echo get_user_meta($user->ID, 'assessment', true); ?></p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div>
								<?php } ?>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="cards">	
								<div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v3.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div>
								<div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v3.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div>
								<div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v3.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div>
								<div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v3.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div>
								<div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v3.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div><div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v3.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="cards">	
								<div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v2.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div>
								<div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v2.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div>
								<div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v2.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div>
								<div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v2.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div>
								<div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v2.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div><div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v2.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="cards">	
								<div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v2.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div>
								<div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v2.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div>
								<div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v2.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div>
								<div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v2.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div>
								<div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v2.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div><div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v2.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="cards">	
								<div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v2.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div>
								<div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v2.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div>
								<div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v2.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div>
								<div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v2.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div>
								<div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v2.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div><div class="card">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v2.png" alt="ValeApp">
									<div class="wrapper">
										<p class="name">Maria</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
										<p class="rate">4,9</p>
									</div>
									<span class="duration">3 meses en Vale</span>
									<p class="price">20 <span>€/h</span></p>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-pagination event" data-label="swiper_pagination"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION 3 -->

	<!-- BEGIN SECTION 4 -->
	<section class="section4 pages" id="page4">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-section4.png" alt="ValeApp">
					<h3 class="title">
						¿Eres pintor profesional <br class="xs-br">
						y quieres ofrecer tus <br class="xs-br">
						sercicios a domicilio?
					</h3>
					<p class="text">
						Lorem ipsum dolor sit amet, <br class="xs-br">
						consectetur adipisicing elit, sed do <br class="xs-br">
						eiusmod tempor incididunt ut labore.
					</p>
					<button class="btn">Ofrecer servicios</button>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION 4 -->

	<!-- BEGIN SECTION 5 -->
	<section class="section5 pages" id="page5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="title">Inspírate</h2>
				</div>
				<div class="col-12">
					<div class="content">
						<div class="wrapper">
							<img class="img-fluid image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-section5-image1.jpg" alt="ValeApp">
							<h3 class="subtitle">Lorem ipsum dolor sit amet</h3>
							<p class="text">
								Lorem ipsum dolor sit amet, <br class="xs-br">
								consectetur adipisicing elit, sed do <br class="xs-br">
								eiusmod tempor incididunt ut labore. <br class="xs-br">
							</p>
						</div>
						<div class="wrapper">
							<img class="img-fluid image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-section5-image1.jpg" alt="ValeApp">
							<h3 class="subtitle">Lorem ipsum dolor sit amet</h3>
							<p class="text">
								Lorem ipsum dolor sit amet, <br class="xs-br">
								consectetur adipisicing elit, sed do <br class="xs-br">
								eiusmod tempor incididunt ut labore. <br class="xs-br">
							</p>
						</div>
						<div class="wrapper">
							<img class="img-fluid image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-section5-image1.jpg" alt="ValeApp">
							<h3 class="subtitle">Lorem ipsum dolor sit amet</h3>
							<p class="text">
								Lorem ipsum dolor sit amet, <br class="xs-br">
								consectetur adipisicing elit, sed do <br class="xs-br">
								eiusmod tempor incididunt ut labore. <br class="xs-br">
							</p>
						</div>
					</div>
					<button class="btn">+ Ver más</button>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION 5 -->

	<!-- BEGIN SECTION 6 -->
	<section class="section6 pages" id="page6">
		<div class="container">
			<h2 class="title">
				Preguntas frecuentes
			</h2>
			<div id="accordionfqa" class="accordion accordion-buttons">
				<div class="accordion-item">
					<h2 id="headingPoints" class="accordion-header">
						<button type="button" class="accordion-button event collapsed"
							data-label="collapsefaq" data-bs-toggle="collapse"
							data-bs-target="#collapsefaq" aria-expanded="false"
							aria-controls="collapsefaq">¿Lorem ipsum dolor sit amet? <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png" alt="ValeApp"></button>
					</h2>
					<div id="collapsefaq" class="accordion-collapse collapse" aria-labelledby="headingPoints"
						data-bs-parent="#accordionfqa">
						<div class="accordion-body">
							<p>
								Lorem ipsum dolor sit amet, consectetur <br class="xs-br">
								adipisicing elit, sed do eiusmod tempor <br class="xs-br">
								incididunt ut labore et dolore magna aliqua. <br class="xs-br">
								Ut enim ad minim veniam, quis nostrud <br class="xs-br">
								exercitation ullamco laboris.
							</p>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 id="headingPoints" class="accordion-header">
						<button type="button" class="accordion-button event collapsed"
							data-label="collapsefaq2" data-bs-toggle="collapse"
							data-bs-target="#collapsefaq2" aria-expanded="false"
							aria-controls="collapsefaq2">
							¿Lorem ipsum dolor sit amet? 
							<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png" alt="ValeApp">
						</button>
					</h2>
					<div id="collapsefaq2" class="accordion-collapse collapse" aria-labelledby="headingPoints"
						data-bs-parent="#accordionfqa">
						<div class="accordion-body">
							<p>
								Lorem ipsum dolor sit amet, consectetur <br class="xs-br">
								adipisicing elit, sed do eiusmod tempor <br class="xs-br">
								incididunt ut labore et dolore magna aliqua. <br class="xs-br">
								Ut enim ad minim veniam, quis nostrud <br class="xs-br">
								exercitation ullamco laboris.
							</p>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 id="headingPoints" class="accordion-header">
						<button type="button" class="accordion-button event collapsed"
							data-label="collapsefaq3" data-bs-toggle="collapse"
							data-bs-target="#collapsefaq3" aria-expanded="false"
							aria-controls="collapsefaq3">¿Lorem ipsum dolor sit amet? <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png" alt="ValeApp"></button>
					</h2>
					<div id="collapsefaq3" class="accordion-collapse collapse" aria-labelledby="headingPoints"
						data-bs-parent="#accordionfqa">
						<div class="accordion-body">
							<p>
								Lorem ipsum dolor sit amet, consectetur <br class="xs-br">
								adipisicing elit, sed do eiusmod tempor <br class="xs-br">
								incididunt ut labore et dolore magna aliqua. <br class="xs-br">
								Ut enim ad minim veniam, quis nostrud <br class="xs-br">
								exercitation ullamco laboris.
							</p>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 id="headingPoints" class="accordion-header">
						<button type="button" class="accordion-button event collapsed"
							data-label="collapsefaq4" data-bs-toggle="collapse"
							data-bs-target="#collapsefaq4" aria-expanded="false"
							aria-controls="collapsefaq4">¿Lorem ipsum dolor sit amet? <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png" alt="ValeApp"></button>
					</h2>
					<div id="collapsefaq4" class="accordion-collapse collapse" aria-labelledby="headingPoints"
						data-bs-parent="#accordionfqa">
						<div class="accordion-body">
							<p>
								Lorem ipsum dolor sit amet, consectetur <br class="xs-br">
								adipisicing elit, sed do eiusmod tempor <br class="xs-br">
								incididunt ut labore et dolore magna aliqua. <br class="xs-br">
								Ut enim ad minim veniam, quis nostrud <br class="xs-br">
								exercitation ullamco laboris.
							</p>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 id="headingPoints" class="accordion-header">
						<button type="button" class="accordion-button event collapsed"
							data-label="collapsefaq5" data-bs-toggle="collapse"
							data-bs-target="#collapsefaq5" aria-expanded="false"
							aria-controls="collapsefaq5">¿Lorem ipsum dolor sit amet? <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png" alt="ValeApp"></button>
					</h2>
					<div id="collapsefaq5" class="accordion-collapse collapse" aria-labelledby="headingPoints"
						data-bs-parent="#accordionfqa">
						<div class="accordion-body">
							<p>
								Lorem ipsum dolor sit amet, consectetur <br class="xs-br">
								adipisicing elit, sed do eiusmod tempor <br class="xs-br">
								incididunt ut labore et dolore magna aliqua. <br class="xs-br">
								Ut enim ad minim veniam, quis nostrud <br class="xs-br">
								exercitation ullamco laboris.
							</p>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 id="headingPoints" class="accordion-header">
						<button type="button" class="accordion-button event collapsed"
							data-label="collapsefaq6" data-bs-toggle="collapse"
							data-bs-target="#collapsefaq6" aria-expanded="false"
							aria-controls="collapsefaq6">¿Lorem ipsum dolor sit amet? <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png" alt="ValeApp"></button>
					</h2>
					<div id="collapsefaq6" class="accordion-collapse collapse" aria-labelledby="headingPoints"
						data-bs-parent="#accordionfqa">
						<div class="accordion-body">
							<p>
								Lorem ipsum dolor sit amet, consectetur <br class="xs-br">
								adipisicing elit, sed do eiusmod tempor <br class="xs-br">
								incididunt ut labore et dolore magna aliqua. <br class="xs-br">
								Ut enim ad minim veniam, quis nostrud <br class="xs-br">
								exercitation ullamco laboris.
							</p>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 id="headingPoints" class="accordion-header">
						<button type="button" class="accordion-button event collapsed"
							data-label="collapsefaq7" data-bs-toggle="collapse"
							data-bs-target="#collapsefaq7" aria-expanded="false"
							aria-controls="collapsefaq7">¿Lorem ipsum dolor sit amet? <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png" alt="ValeApp"></button>
					</h2>
					<div id="collapsefaq7" class="accordion-collapse collapse" aria-labelledby="headingPoints"
						data-bs-parent="#accordionfqa">
						<div class="accordion-body">
							<p>
								Lorem ipsum dolor sit amet, consectetur <br class="xs-br">
								adipisicing elit, sed do eiusmod tempor <br class="xs-br">
								incididunt ut labore et dolore magna aliqua. <br class="xs-br">
								Ut enim ad minim veniam, quis nostrud <br class="xs-br">
								exercitation ullamco laboris.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION 6 -->

	<!-- BEGIN SECTION 7 -->
	<section class="section7 pages" id="page7">
		<div class="container">
			<h2 class="title">
				Otras categorías
			</h2>
			<div id="accordionCategories" class="accordion accordion-buttons">
				<div class="accordion-item">
					<h2 id="headingPoints" class="accordion-header">
						<button type="button" class="accordion-button event collapsed"
							data-label="collapseHome" data-bs-toggle="collapse"
							data-bs-target="#collapseHome" aria-expanded="false"
							aria-controls="collapseHome">
							<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category1.png" alt="ValeApp">
							Hogar
						</button>
					</h2>
					<div id="collapseHome" class="accordion-collapse collapse" aria-labelledby="headingPoints"
						data-bs-parent="#accordionfqa">
						<div class="accordion-body">
							<ul class="list">
								<li class="item">
									<a class="event" href="#">Fontanería</a>
								</li>
								<li class="item">
									<a class="event" href="#">Limpieza</a>
								</li>
								<li class="item">
									<a class="event" href="#">Pintura</a>
								</li>
								<li class="item">
									<a class="event" href="#">Mudanza</a>
								</li>
								<li class="item">
									<a class="event" href="#">Obras</a>
								</li>
								<li class="item">
									<a class="event" href="#">Electricidad</a>
								</li>
								<li class="item">
									<a class="event" href="#">Montaje muebles</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 id="headingPoints" class="accordion-header">
						<button type="button" class="accordion-button event collapsed"
							data-label="collapseLearn" data-bs-toggle="collapse"
							data-bs-target="#collapseLearn" aria-expanded="false"
							aria-controls="collapseLearn">
							<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category2.png" alt="ValeApp">
							Aprende
						</button>
					</h2>
					<div id="collapseLearn" class="accordion-collapse collapse" aria-labelledby="headingPoints"
						data-bs-parent="#accordionfqa">
						<div class="accordion-body">
							<ul class="list">
								<li class="item">
									<a class="event" href="#">Fontanería</a>
								</li>
								<li class="item">
									<a class="event" href="#">Limpieza</a>
								</li>
								<li class="item">
									<a class="event" href="#">Pintura</a>
								</li>
								<li class="item">
									<a class="event" href="#">Mudanza</a>
								</li>
								<li class="item">
									<a class="event" href="#">Obras</a>
								</li>
								<li class="item">
									<a class="event" href="#">Electricidad</a>
								</li>
								<li class="item">
									<a class="event" href="#">Montaje muebles</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 id="headingPoints" class="accordion-header">
						<button type="button" class="accordion-button event collapsed"
							data-label="collapseBody" data-bs-toggle="collapse"
							data-bs-target="#collapseBody" aria-expanded="false"
							aria-controls="collapseBody">
							<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category3.png" alt="ValeApp">
							Deporte
						</button>
					</h2>
					<div id="collapseBody" class="accordion-collapse collapse" aria-labelledby="headingPoints"
						data-bs-parent="#accordionfqa">
						<div class="accordion-body">
							<ul class="list">
								<li class="item">
									<a class="event" href="#">Fontanería</a>
								</li>
								<li class="item">
									<a class="event" href="#">Limpieza</a>
								</li>
								<li class="item">
									<a class="event" href="#">Pintura</a>
								</li>
								<li class="item">
									<a class="event" href="#">Mudanza</a>
								</li>
								<li class="item">
									<a class="event" href="#">Obras</a>
								</li>
								<li class="item">
									<a class="event" href="#">Electricidad</a>
								</li>
								<li class="item">
									<a class="event" href="#">Montaje muebles</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 id="headingPoints" class="accordion-header">
						<button type="button" class="accordion-button event collapsed"
							data-label="collapseMind" data-bs-toggle="collapse"
							data-bs-target="#collapseMind" aria-expanded="false"
							aria-controls="collapseMind">
							<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category4.png" alt="ValeApp">
							Mente
						</button>
					</h2>
					<div id="collapseMind" class="accordion-collapse collapse" aria-labelledby="headingPoints"
						data-bs-parent="#accordionfqa">
						<div class="accordion-body">
							<ul class="list">
								<li class="item">
									<a class="event" href="#">Fontanería</a>
								</li>
								<li class="item">
									<a class="event" href="#">Limpieza</a>
								</li>
								<li class="item">
									<a class="event" href="#">Pintura</a>
								</li>
								<li class="item">
									<a class="event" href="#">Mudanza</a>
								</li>
								<li class="item">
									<a class="event" href="#">Obras</a>
								</li>
								<li class="item">
									<a class="event" href="#">Electricidad</a>
								</li>
								<li class="item">
									<a class="event" href="#">Montaje muebles</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 id="headingPoints" class="accordion-header">
						<button type="button" class="accordion-button event collapsed"
							data-label="collapseTakeCare" data-bs-toggle="collapse"
							data-bs-target="#collapseTakeCare" aria-expanded="false"
							aria-controls="collapseTakeCare">
							<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category5.png" alt="ValeApp">
							Cuida de los tuyos
						</button>
					</h2>
					<div id="collapseTakeCare" class="accordion-collapse collapse" aria-labelledby="headingPoints"
						data-bs-parent="#accordionfqa">
						<div class="accordion-body">
							<ul class="list">
								<li class="item">
									<a class="event" href="#">Fontanería</a>
								</li>
								<li class="item">
									<a class="event" href="#">Limpieza</a>
								</li>
								<li class="item">
									<a class="event" href="#">Pintura</a>
								</li>
								<li class="item">
									<a class="event" href="#">Mudanza</a>
								</li>
								<li class="item">
									<a class="event" href="#">Obras</a>
								</li>
								<li class="item">
									<a class="event" href="#">Electricidad</a>
								</li>
								<li class="item">
									<a class="event" href="#">Montaje muebles</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 id="headingPoints" class="accordion-header">
						<button type="button" class="accordion-button event collapsed"
							data-label="collapseBeauty" data-bs-toggle="collapse"
							data-bs-target="#collapseBeauty" aria-expanded="false"
							aria-controls="collapseBeauty">
							<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category6.png" alt="ValeApp">
							Belleza
						</button>
					</h2>
					<div id="collapseBeauty" class="accordion-collapse collapse" aria-labelledby="headingPoints"
						data-bs-parent="#accordionfqa">
						<div class="accordion-body">
							<ul class="list">
								<li class="item">
									<a class="event" href="#">Fontanería</a>
								</li>
								<li class="item">
									<a class="event" href="#">Limpieza</a>
								</li>
								<li class="item">
									<a class="event" href="#">Pintura</a>
								</li>
								<li class="item">
									<a class="event" href="#">Mudanza</a>
								</li>
								<li class="item">
									<a class="event" href="#">Obras</a>
								</li>
								<li class="item">
									<a class="event" href="#">Electricidad</a>
								</li>
								<li class="item">
									<a class="event" href="#">Montaje muebles</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 id="headingPoints" class="accordion-header">
						<button type="button" class="accordion-button event collapsed"
							data-label="collapseContract" data-bs-toggle="collapse"
							data-bs-target="#collapseContract" aria-expanded="false"
							aria-controls="collapseContract">
							<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category7.png" alt="ValeApp">
							Contrata
						</button>
					</h2>
					<div id="collapseContract" class="accordion-collapse collapse" aria-labelledby="headingPoints"
						data-bs-parent="#accordionfqa">
						<div class="accordion-body">
							<ul class="list">
								<li class="item">
									<a class="event" href="#">Fontanería</a>
								</li>
								<li class="item">
									<a class="event" href="#">Limpieza</a>
								</li>
								<li class="item">
									<a class="event" href="#">Pintura</a>
								</li>
								<li class="item">
									<a class="event" href="#">Mudanza</a>
								</li>
								<li class="item">
									<a class="event" href="#">Obras</a>
								</li>
								<li class="item">
									<a class="event" href="#">Electricidad</a>
								</li>
								<li class="item">
									<a class="event" href="#">Montaje muebles</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 id="headingPoints" class="accordion-header">
						<button type="button" class="accordion-button event collapsed"
							data-label="collapseRent" data-bs-toggle="collapse"
							data-bs-target="#collapseRent" aria-expanded="false"
							aria-controls="collapseRent">
							<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category8.png" alt="ValeApp">
							Alquila
						</button>
					</h2>
					<div id="collapseRent" class="accordion-collapse collapse" aria-labelledby="headingPoints"
						data-bs-parent="#accordionfqa">
						<div class="accordion-body">
							<ul class="list">
								<li class="item">
									<a class="event" href="#">Fontanería</a>
								</li>
								<li class="item">
									<a class="event" href="#">Limpieza</a>
								</li>
								<li class="item">
									<a class="event" href="#">Pintura</a>
								</li>
								<li class="item">
									<a class="event" href="#">Mudanza</a>
								</li>
								<li class="item">
									<a class="event" href="#">Obras</a>
								</li>
								<li class="item">
									<a class="event" href="#">Electricidad</a>
								</li>
								<li class="item">
									<a class="event" href="#">Montaje muebles</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 id="headingPoints" class="accordion-header">
						<button type="button" class="accordion-button event collapsed"
							data-label="collapseOther" data-bs-toggle="collapse"
							data-bs-target="#collapseOther" aria-expanded="false"
							aria-controls="collapseOther">
							<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category9.png" alt="ValeApp">
							Otros
						</button>
					</h2>
					<div id="collapseOther" class="accordion-collapse collapse" aria-labelledby="headingPoints"
						data-bs-parent="#accordionfqa">
						<div class="accordion-body">
							<ul class="list">
								<li class="item">
									<a class="event" href="#">Fontanería</a>
								</li>
								<li class="item">
									<a class="event" href="#">Limpieza</a>
								</li>
								<li class="item">
									<a class="event" href="#">Pintura</a>
								</li>
								<li class="item">
									<a class="event" href="#">Mudanza</a>
								</li>
								<li class="item">
									<a class="event" href="#">Obras</a>
								</li>
								<li class="item">
									<a class="event" href="#">Electricidad</a>
								</li>
								<li class="item">
									<a class="event" href="#">Montaje muebles</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION 7 -->

    <div id="modal01" class="modals" style="position: fixed; z-index: 9001; display: none;">
		<div class="content">
			<div class="plainmodal-close"></div>
			<div class="wrapper">
				<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v3.png" alt="ValeApp">
				<div class="provider-info">
					<div class="provider-wrapper">
						<span class="name"><?php echo get_post_meta($post->ID, 'name', true); ?></span>
						<p class="price">20 <span>€/h</span></p>
					</div>
					<div class="provider-wrapper rate">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp">
						<span class="rating"><?php echo get_post_meta($post->ID, 'assestment', true); ?></span>
						<span class="opinions">(30 opiniones)</span>
					</div>
					<div class="provider-wrapper">
						<span class="duration">3 meses en Vale</span>
						<span class="quantity">| 30 servicios</span>
					</div>

				</div>
			</div>
			<button class="btn">Solicitar servicio</button>
			<div class="wrapper1">
				<h3 class="title">Experiencia y habilidades</h3>
				<p class="text">
					Lorem ipsum dolor sit amet, <br class="xs-br">
					consectetur adipisicing elit, sed do <br class="xs-br">
					eiusmod tempor incididunt ut <br class="xs-br">
					bore.
				</p>
			</div>
			<div class="wrapper2">
				<h3 class="title">Galería</h3>
				<div id="gallery" class="swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img class="img-fluid gallery" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-gallery.jpg" alt="ValeApp">
							<img class="img-fluid gallery" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-gallery.jpg" alt="ValeApp">
							<img class="img-fluid gallery" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-gallery.jpg" alt="ValeApp">
						</div>
						<div class="swiper-slide">
							<img class="img-fluid gallery" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-gallery.jpg" alt="ValeApp">
							<img class="img-fluid gallery" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-gallery.jpg" alt="ValeApp">
							<img class="img-fluid gallery" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-gallery.jpg" alt="ValeApp">
						</div>
						<div class="swiper-slide">
							<img class="img-fluid gallery" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-gallery.jpg" alt="ValeApp">
							<img class="img-fluid gallery" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-gallery.jpg" alt="ValeApp">
							<img class="img-fluid gallery" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-gallery.jpg" alt="ValeApp">
						</div>
					</div>
					<div class="swiper-pagination event" data-label="swiper_pagination"></div>
				</div>
			</div>
			<div class="wrapper3">
				<h3 class="title">Acerca del servicio</h3>
				<div class="text-content">
					<p id="text" class="text">
						Lorem ipsum dolor sit amet, <br class="xs-br">
						consectetur adipisicing elit, sed do <br class="xs-br">
						eiusmod tempor incididunt ut <br class="xs-br">
						bore et dolore magna aliqua. Ut. <br class="xs-br">
						enim ad minim veniam, quis
					</p>
				</div>
				<button id="showText" class="btn">Ver mas</button>
			</div>
			<div class="wrapper4">
				<h3 class="title">Valoraciones de <?php echo get_post_meta($post->ID, 'name', true); ?> (30)</h3>
				<div class="rating-content">
					<div class="rating-wrapper">
						<img class="img-fluid profile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-rating-photo.png" alt="ValeApp">
						<div class="rating-info">
							<p class="name">Jorge P</p>
							<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-rating-modal.png" alt="ValeApp">
						</div>
						<div class="duration">Hace 2 dias</div>
					</div>
					<p class="message">
						“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut bore.”
						et dol
					</p>
				</div>
				<div class="rating-content">
					<div class="rating-wrapper">
						<img class="img-fluid profile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-rating-photo.png" alt="ValeApp">
						<div class="rating-info">
							<p class="name">Lorena P.</p>
							<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-rating-modal.png" alt="ValeApp">
						</div>
						<div class="duration">Hace 3 semanas</div>
					</div>
					<p class="message">
						“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut bore.”
						et dol
					</p>
				</div>
				<div class="rating-content">
					<div class="rating-wrapper">
						<img class="img-fluid profile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-rating-photo.png" alt="ValeApp">
						<div class="rating-info">
							<p class="name">Isabel G. </p>
							<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-rating-modal.png" alt="ValeApp">
						</div>
						<div class="duration">Hace 2 meses</div>
					</div>
					<p class="message">
						“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut bore.”
						et dol
					</p>
				</div>
				<button class="btn"> + Ver mas</button>
			</div>
			<div class="wrapper5">
				<h3 class="title">Profesional</h3>
				<div class="wrapper">
					<div class="information">
						<p class="text">
							<span>De</span>
							<?php echo get_post_meta($post->ID, 'country', true); ?>
						</p>
						<p class="text">
							Miembro desde
							<span>Noviembre 2022</span>
						</p>
						<p class="text">
							Responde aprox. en
							<span>1 hora</span>
						</p>
						<p class="text">
							Idiomas
							<span>Español/Inglés</span>
						</p>
					</div>
					<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v3.png" alt="ValeApp">
				</div>
				<button class="btn">
					<img class="img-fluid message" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-message-icon.png" alt="ValeApp">
					Escribir a <?php echo get_post_meta($post->ID, 'name', true); ?> 
				</button>
			</div>
			<div class="wrapper6">
				<h3 class="title">Política de cancelación</h3>
				<table class="table table-responsive">
					<thead>
					  <tr>
						<th>Antelación al inicio</th>
						<th>% reembolso</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td>No show</td>
						<td>0% del importe</td>
					  </tr>
					  <tr>
						<td>Menos de 24h</td>
						<td>50% del importe</td>
					  </tr>
					  <tr>
						<td>Mas de 24h</td>
						<td>100% del importe</td>
					  </tr>
					</tbody>
				  </table>
			</div>
			<div class="wrapper7">
				<h3 class="title">Más servicios de <?php echo get_post_meta($post->ID, 'name', true); ?></h3>
				<div class="content">
					<img class="service" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-service1.jpg" alt="ValeApp">
					<div class="block">
						<div class="info">
							<img class="profile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-ervice-user.png" alt="ValeApp">
							<span class="name"><?php echo get_post_meta($post->ID, 'name', true); ?></span>
						</div>
						<div class="info">
							<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-service-icon.png" alt="ValeApp">
							<span class="category">Aprende</span>
						</div>
						<div class="info">
							<span class="service-name">Fotografia</span>
							<p class="price">12 <span>€/h</span></p>
						</div>
					</div>
				</div>
				<div class="content">
					<img class="service" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-service2.jpg" alt="ValeApp">
					<div class="block">
						<div class="info">
							<img class="profile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-ervice-user.png" alt="ValeApp">
							<span class="name"><?php echo get_post_meta($post->ID, 'name', true); ?></span>
						</div>
						<div class="info">
							<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-service-icon2.png" alt="ValeApp">
							<span class="category">Cuidade los tuyos</span>
						</div>
						<div class="info">
							<span class="service-name">Mascotas</span>
							<p class="price">8 <span>€/h</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
}
get_footer();