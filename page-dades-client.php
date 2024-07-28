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

acf_form_head();

get_header();

if(current_user_can('clientevaleapp') || current_user_can('administrator')) {

?>
<div class="container login mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-12">
            <h2 class="title">El meu compte</h2>
            <?php
                acf_form([
                    'post_id'       => 'new_post',
                    'field_groups'  => ['group_64dcf6cf78620'],
                    'new_post'      => [
                        'post_type'     => 'cliente',
                        'post_status'   => 'publish'
                    ],
                    'form' => true,
                    'fields' => [
                        'field_64dcf7f7e9ebb',
                        'field_6557a1351db96'
                    ],
                    'uploader' => 'wp',
                    'submit_value'  => 'Continuar',
                    'updated_message' => '¡Formulario actualizado!',
                    'return' => '/home',
                ]);    
            ?>
        </div>
    </div>
</div>

<?php
}
    else{
        echo do_shortcode('[no_authorizatiojn_page]');
    }
get_footer();