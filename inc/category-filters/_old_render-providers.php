<?php 
function render_providers($users){
    ?>
    <!-- BEGIN SECTION 3 -->
	<section class="section3 pages providers" id="page3">
		<div class="container">
			<div class="row">
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

<script>
$(document).ready(function() {
    $('.section3.Promo.HomeOffer').css('display', 'none');
});
</script>
	<!-- END SECTION 3 -->
<?php
};
