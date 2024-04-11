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

// Utilizando el plugin Front End pm
// echo do_shortcode('[front-end-pm]');

//Utilizando el plugin Simple Ajax Chat
// echo do_shortcode('[sac_happens]');

//Utilizando el plugin better message
// echo do_shortcode('[better_messages]');
$current_user_id = get_current_user_id();
echo do_shortcode('[better_messages_pm_button text="Contáctalo" user_id="' . $current_user_id . '" message="Este es un mensaje de prueba" target="_self" class="extra-class" fast_start="0" url_only="0"]');


echo do_shortcode('[better_messages_pm_button text="Contáctalo" user_id="74" message="Este es un mensaje de prueba" target="_self" class="button" fast_start="0" url_only="0"]');

?>



<?php
get_footer();