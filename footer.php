<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ValeApp
 */
?>

<footer>
	<div class="container">
		<div id="accordionfooter" class="accordion accordion-buttons">
			<div class="d-none d-md-block footer-logo">
				<img class="image-fluid image footer-logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-desktop-logo.png" alt="ValeApp">
				<div class="footer-logo-text">
					La tasca que necessitis, de la manera<br />
					més fàcil. Vale connecta professionals<br />
					que ofereixen serveis en diverses<br />
					àrees, amb clients que necessiten<br />
					ajuda amb tasques quotidianes i<br />
					projectes especialitzats, a prop teu.
				</div>
			</div>
			<div class="accordion-item">
				<h2 id="headingPoints" class="accordion-header">
					<button type="button" class="accordion-button event collapsed" data-label="collapsefaq" data-bs-toggle="collapse" data-bs-target="#collapsefaq" aria-expanded="false" aria-controls="collapsefaq">Categorías <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png" alt="ValeApp"></button>
				</h2>
				<div id="collapsefaq" class="accordion-collapse collapse" aria-labelledby="headingPoints" data-bs-parent="#accordionfqa">
					<div class="accordion-body">
						<ul class="accordion-links row">
							<li class="col-12 col-md-5">
								<a href="/categoria/hogar">Llar</a>
							</li>
							<li class="col-12 col-md-7">
								<a href="/categoria/belleza">Bellesa</a>
							</li>
							<li class="col-12 col-md-5">
								<a href="/categoria/aprende">Aprèn</a>
							</li>
							<li class="col-12 col-md-7">
								<a href="/categoria/contrata">Contracta</a>
							</li>
							<li class="col-12 col-md-5">
								<a href="/categoria/deporte">Esport</a>
							</li>
							<li class="col-12 col-md-7">
								<a href="/categoria/alquila">Lloga</a>
							</li>
							<li class="col-12 col-md-5">
								<a href="/categoria/mente">Ment</a>
							</li>
							<li class="col-12 col-md-7">
								<a href="/categoria/eventos">Esdeveniments</a>
							</li>
							<li class="col-12">
								<a href="/categoria/cuida-los-tuyos">Cuida els teus</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 id="headingPoints" class="accordion-header">
					<button type="button" class="accordion-button event collapsed" data-label="collapsefaq2" data-bs-toggle="collapse" data-bs-target="#collapsefaq2" aria-expanded="false" aria-controls="collapsefaq2">
						Vale
						<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png" alt="ValeApp">
					</button>
				</h2>
				<div id="collapsefaq2" class="accordion-collapse collapse" aria-labelledby="headingPoints" data-bs-parent="#accordionfqa">
					<div class="accordion-body">
						<!-- <p>
							Lorem ipsum dolor sit amet, consectetur <br class="xs-br">
							adipisicing elit, sed do eiusmod tempor <br class="xs-br">
							incididunt ut labore et dolore magna aliqua. <br class="xs-br">
							Ut enim ad minim veniam, quis nostrud <br class="xs-br">
							exercitation ullamco laboris.
						</p> -->
						<ul class="accordion-links row">
							<li class="col-12">
								<a href="/preguntas-frecuentes">Preguntes frequents</a>
							</li>
							<li class="col-12">
								<a href="#">Professionals</a>
							</li>
							<li class="col-12">
								<a href="/iniciar-sesion-profesional-o-usuario">Registrar-se/Iniciar sessió</a>
							</li>
							<li class="col-12">
								<a href="#">Blog</a>
							</li>
							<li class="col-12">
								<a href="/ayuda">Ajuda</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="accordion-item d-block d-md-none">
				<h2 id="headingPoints" class="accordion-header">
					<button type="button" class="accordion-button event collapsed" data-label="collapsefaq3" data-bs-toggle="collapse" data-bs-target="#collapsefaq3" aria-expanded="false" aria-controls="collapsefaq3">Acerca de <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png" alt="ValeApp"></button>
				</h2>
				<div id="collapsefaq3" class="accordion-collapse collapse" aria-labelledby="headingPoints" data-bs-parent="#accordionfqa">
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
					<button type="button" class="accordion-button event collapsed" data-label="collapsefaq4" data-bs-toggle="collapse" data-bs-target="#collapsefaq4" aria-expanded="false" aria-controls="collapsefaq4">Legal <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png" alt="ValeApp"></button>
				</h2>
				<div id="collapsefaq4" class="accordion-collapse collapse" aria-labelledby="headingPoints" data-bs-parent="#accordionfqa">
					<div class="accordion-body">
						<!-- <p>
							Lorem ipsum dolor sit amet, consectetur <br class="xs-br">
							adipisicing elit, sed do eiusmod tempor <br class="xs-br">
							incididunt ut labore et dolore magna aliqua. <br class="xs-br">
							Ut enim ad minim veniam, quis nostrud <br class="xs-br">
							exercitation ullamco laboris.
						</p> -->
						<ul class="accordion-links row">
							<li class="col-12">
								<a href="#">Termes i condicions</a>
							</li>
							<li class="col-12">
								<a href="#">Política de privacitat</a>
							</li>
							<li class="col-12">
								<a href="#">Política de cookies</a>
							</li>
							<li class="col-12">
								<a href="#">Política de cancel.lació</a>
							</li>
							<li class="col-12">
								<a href="#">Avís Legal</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footlast">
			<img class="image-fluid image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valelogo.png" alt="ValeApp">
			<div class="copyright">
				© 2024 Vale. Tots els drets reservats.
			</div>
			<div class="xxss">
				<a href="#" target="_blank"><i class="bi bi-facebook"></i></a>
				<a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
				<a href="#" target="_blank"><i class="bi bi-linkedin"></i></a>
			</div>
		</div>
	</div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>