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

echo do_shortcode('[asp_product id="1327"]');
echo do_shortcode('[asp_product id="1328"]');
echo do_shortcode('[asp_product id="1329"]');
?>



<?php
get_footer();