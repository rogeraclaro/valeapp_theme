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
echo do_shortcode('[better_messages]');
// echo do_shortcode('[better_messages_unread_counter hide_when_no_messages="1" preserve_space="1"]');


// $thread_id = 1; //Conversation ID to display

// echo Better_Messages()->functions->get_conversation_layout( $thread_id );

get_footer();