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

acf_form_head();

get_header();

if (current_user_can('clientevaleapp') || current_user_can('administrator')) {

?>
<div class="service-request-form forms-default container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-12">
            <?php
                acf_form([
                    'post_id'       => 'new_post',
                    'field_groups'  => ['group_64dcf8a7a89d8'],
                    'new_post'      => [
                        'post_type'     => 'solicitar-servicio',
                        'post_status'   => 'publish'
                    ],
                    'fields' => [
                        'field_656f483c90876',
                        'field_656f507890877',
                        'field_656f517290878',
                        'field_656f51d690879',
                        'field_656f52929087a',
                        'field_656f53019087b'
                    ],
                    'submit_value'  => 'Continuar',
                    'updated_message' => '¡Formulario actualizado!',
                    'return' => '/mis-ofertas',
                ]);
            ?>
        </div>
    </div>
</div>

<?php
}
 else {
     echo do_shortcode('[no_authorization_page]');
 }
get_footer();