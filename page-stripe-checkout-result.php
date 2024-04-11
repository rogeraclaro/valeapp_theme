<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 *
 * @package ValeApp
 */

get_header();
?>
<section class="section2 pages" id="page2">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="title">
					Checkout Result
				</h2>
			</div>
		</div>
	</div>
</section>
<?php echo do_shortcode("[accept_stripe_payment_checkout]"); ?>

<?php
get_footer();
