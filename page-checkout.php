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

<div class="pageCart">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12">
        <!-- <h1>Checkout</h1> -->
        <?php echo do_shortcode('[woocommerce_checkout]'); ?>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();